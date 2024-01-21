@extends('layout.app')

@section('content')
    <h1>Categories List</h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
            <li>{{ $category->color }}</li>
        @endforeach
    </ul>
@endsection