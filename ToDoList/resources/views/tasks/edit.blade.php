@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="w-50 mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $task->name }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" name="date" value="{{ $task->date }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" class="form-control" name="category" value="{{ $task->category }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update task</button>
    </form>
</div>
@endsection
