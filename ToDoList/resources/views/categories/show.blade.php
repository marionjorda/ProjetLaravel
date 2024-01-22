@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Category details</h1>

    <form class="w-50 mx-auto">
        <div class="mb-3">
            <label for="CategoryName" class="form-label"><strong>Name:</strong></label>
            <input type="text" class="form-control" id="categoryName" value="{{ $category->name }}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="categoryColor" class="form-label"><strong>Color:</strong></label>
            <input type="color" class="form-control" id="categoryColor" value="{{ $category->color }}" style="height: 48px; width: 48px; padding: 0.375rem;" readonly>
        </div>
        
        <a href="{{ route('categories.index') }}" class="btn btn-primary text-white">Back to category list</a>
    </form>
</div>
@endsection
