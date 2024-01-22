@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create a new category</h1>

    <form action="{{ route('categories.store') }}" method="post" class="w-50 mx-auto">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Category Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    
        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="color" class="form-control" id="color" name="color" style="height: 48px; width: 48px; padding: 0.375rem;" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>

@endsection