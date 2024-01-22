@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post" class="w-50 mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="color" class="form-control" name="color" value="{{ $category->color }}" style="height: 48px; width: 48px; padding: 0.375rem;" required>
        </div>

        <button type="submit" class="btn btn-primary">Update category</button>
    </form>
</div>
@endsection
