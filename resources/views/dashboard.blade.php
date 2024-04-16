<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Blog Management</h3>
                    <p class="mt-2"><a href="{{ route('blogs.index') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">Manage Blogs</a></p>
                    <p class="mt-2"><a href="{{ route('blogs.create') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">Create New Blog</a></p>
                    <!-- Add more links for edit, delete, and show here -->
                </div>                
                <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white">User Information</h3>
                    @if(Auth::check())
                        <p class="mt-2 text-white">Name: {{ Auth::user()->name }}</p>
                        <p class="text-white">Email: {{ Auth::user()->email }}</p>
                    @else
                        <p class="mt-2 text-white">Please log in to view your information.</p>
                    @endif
                </div>                
            </div>
        </div>
    </div>

    @if(Auth::check())
        <div class="fixed bottom-0 left-0 right-0 bg-green-500 text-white px-4 py-2 rounded-md text-center" id="loggedInMessage">You're logged in!</div>
        <script>
            // Wait for the document to load
            document.addEventListener('DOMContentLoaded', function() {
                // Delay for 3 seconds and then fade out the message
                setTimeout(function() {
                    document.getElementById('loggedInMessage').style.opacity = '0';
                    setTimeout(function() {
                        document.getElementById('loggedInMessage').style.display = 'none';
                    }, 1000); // Fade out duration
                }, 3000); // Display duration
            });
        </script>
    @endif
</x-app-layout>
