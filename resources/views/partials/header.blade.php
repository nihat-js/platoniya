<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl">Your Task Manager</h1>
        <div>
            @if(Auth::check())
                <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Logout</a>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Login</a>
            @endif
        </div>
    </div>
</header>
