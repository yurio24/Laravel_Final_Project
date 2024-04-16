<nav class="bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <ul class="ml-10 flex items-baseline space-x-4">
                        <li><a href="{{ route('dashboard') }}" class="text-white hover:text-gray-300">Home</a></li>
                        <li><a href="{{ route('blogs.index') }}" class="text-white hover:text-gray-300">Manage Blogs</a></li>
                        <!-- Add other navigation links as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
