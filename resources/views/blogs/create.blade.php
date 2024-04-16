<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a New Blog') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('blogs.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-white dark:text-gray-300">Title:</label>
                        <input type="text" id="title" name="title" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-400 dark:focus:border-gray-400 dark:placeholder-gray-500 dark:hover:border-gray-500 dark:focus:ring-opacity-50 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-white dark:text-gray-300">Content:</label>
                        <textarea id="content" name="content" rows="5" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-gray-400 dark:focus:border-gray-400 dark:placeholder-gray-500 dark:hover:border-gray-500 dark:focus:ring-opacity-50 rounded-md"></textarea>
                    </div>
                    <div class="flex justify-between items-center">
                        <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-700 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-500 disabled:opacity-25 transition">Back</a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-500 disabled:opacity-25 transition">Create Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

