@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create a new task</h1>

    <form action="{{ route('tasks.store') }}" method="post" class="w-50 mx-auto">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Task Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    
        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
    
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Create task</button>
    </form>

@endsection
