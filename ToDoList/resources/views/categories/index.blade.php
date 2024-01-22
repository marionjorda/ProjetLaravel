@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories List</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success">New category</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><input type="color" class="form-control" id="categoryColor" value="{{ $category->color }}" style="height: 37px; width: 58px; padding: 0.375rem;" readonly></td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection