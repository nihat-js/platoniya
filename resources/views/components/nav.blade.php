<nav class="bg-gradient-to-r from-purple-500 to-blue-500 p-4">
    <div class="flex justify-between items-center">
        <!-- Left Navbar -->
        <div class="text-white font-bold">
            <a href="/dashboard" class="mr-6 hover:text-gray-200 transition">Dashboard</a>
            <a href="/tasks" class="mr-6 hover:text-gray-200 transition">My Tasks</a>
            <a href="/create-task" class="mr-6 hover:text-gray-200 transition">Create Task</a>
            <a href="/completed-tasks" class="mr-6 hover:text-gray-200 transition">Completed Tasks</a>
            <a href="/settings" class="hover:text-gray-200 transition">Settings</a>
        </div>

        <!-- Right Navbar -->
        <div class="relative text-white dropdown">
            <button class="focus:outline-none">
                <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full border-2 border-white">
            </button>
            <div class="dropdown-menu absolute right-0 mt-2 w-64 bg-white text-gray-800 rounded-md shadow-lg hidden">
                <div class="p-4">
                    <h3 class="font-semibold">Involved Projects</h3>
                    <ul class="mt-2">
                        <li><a href="#project1" class="block px-4 py-2 hover:bg-gray-100 transition">Project Alpha</a>
                        </li>
                        <li><a href="#project2" class="block px-4 py-2 hover:bg-gray-100 transition">Project Beta</a>
                        </li>
                        <li><a href="#project3" class="block px-4 py-2 hover:bg-gray-100 transition">Project Gamma</a>
                        </li>
                    </ul>
                </div>
                <div class="border-t border-gray-200"></div>
                <div class="p-4">
                    <a href="#create-project"
                        class="block px-4 py-2 text-blue-600 hover:bg-gray-100 transition flex items-center">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Create New Project
                    </a>
                    <a href="#profile" class="block px-4 py-2 hover:bg-gray-100 transition">Profile</a>
                    <a href="#logout" class="block px-4 py-2 hover:bg-gray-100 transition">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    document.querySelector('.dropdown').addEventListener('mouseenter', function () {
        this.querySelector('.dropdown-menu').style.display = 'block';
    });
    document.querySelector('.dropdown').addEventListener('mouseleave', function () {
        this.querySelector('.dropdown-menu').style.display = 'none';
    });

</script>