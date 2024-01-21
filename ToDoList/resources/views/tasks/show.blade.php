@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Task details</h1>

    <form class="w-50 mx-auto">
        <div class="mb-3">
            <label for="taskName" class="form-label"><strong>Name:</strong></label>
            <input type="text" class="form-control" id="taskName" value="{{ $task->name }}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="taskDate" class="form-label"><strong>Date:</strong></label>
            <input type="text" class="form-control" id="taskDate" value="{{ $task->date }}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="taskCategory" class="form-label"><strong>Category:</strong></label>
            <input type="text" class="form-control" id="taskCategory" value="{{ $task->category }}" readonly>
        </div>
        
        <a href="{{ route('tasks.index') }}" class="btn btn-primary text-white">Back to task list</a>
    </form>
</div>
@endsection
