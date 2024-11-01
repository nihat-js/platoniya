@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow-md rounded p-4">
            <h3 class="font-semibold text-lg">Total Tasks</h3>
            <p class="text-2xl">{{ $totalTasks }}</p>
        </div>
        <div class="bg-white shadow-md rounded p-4">
            <h3 class="font-semibold text-lg">Total Projects</h3>
            <p class="text-2xl">{{ $totalProjects }}</p>
        </div>
        <div class="bg-white shadow-md rounded p-4">
            <h3 class="font-semibold text-lg">Total Teams</h3>
            <p class="text-2xl">{{ $totalTeams }}</p>
        </div>
    </div>

    <div class="mt-6">
        <h3 class="font-semibold text-lg mb-2">Recent Tasks</h3>
        <ul>
            @foreach($recentTasks as $task)
                <li class="bg-gray-100 p-2 rounded mb-2">
                    <span class="font-bold">{{ $task->title }}</span> - {{ $task->description }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
