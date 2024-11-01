<nav class="bg-white shadow">
    <div class="container mx-auto flex justify-between">
        <div class="flex space-x-4 p-4">
            <a class="text-gray-700 hover:text-blue-600" href="{{ url('/') }}">Home</a>
            <a class="text-gray-700 hover:text-blue-600" href="{{ route('tasks.index') }}">My Tasks</a>
            <a class="text-gray-700 hover:text-blue-600" href="{{ route('projects.index') }}">Projects</a>
            <a class="text-gray-700 hover:text-blue-600" href="{{ route('teams.index') }}">Teams</a>
            <a class="text-gray-700 hover:text-blue-600" href="{{ route('settings') }}">Settings</a>
        </div>
    </div>
</nav>
