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
            <label for="category_id" class="form-label">Category:</label>
            <select name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $task->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update task</button>
    </form>
</div>
@endsection
