@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks List</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-success">New task</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->date }}</td>
                    <td>{{ $task->category }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection