@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')
    <h2 class="text-2xl font-bold mb-4">My Tasks</h2>
    <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded">Add New Task</a>
    
    <div class="mt-4">
        @foreach($tasks as $task)
            <div class="bg-white shadow-md rounded p-4 mb-2">
                <h5 class="font-semibold text-lg">{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <div class="mt-2">
                    <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 rounded">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
