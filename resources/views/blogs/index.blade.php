<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('List of Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if (!$blogs->isEmpty())
                    <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-white dark:text-gray-200">Blog Management</h3>
                        <p class="mt-2"><a href="{{ route('blogs.create') }}" class="text-blue-400 hover:text-blue-600 dark:text-blue-300 dark:hover:text-blue-400">Create New Blog</a></p>
                    </div>

                    <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($blogs as $blog)
                                <li class="flex items-center justify-between py-2">
                                    <a href="{{ route('blogs.show', $blog->id) }}" class="text-blue-400 hover:text-blue-600 dark:text-blue-300 dark:hover:text-blue-400">{{ $blog->title }}</a>
                                    <div>
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="text-yellow-400 hover:text-yellow-600 dark:text-yellow-300 dark:hover:text-yellow-400">Edit</a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-600 dark:text-red-300 dark:hover:text-red-400">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if ($blogs->isEmpty())
        <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6 mt-8">
            <div class="flex justify-center items-center h-full">
                <div class="text-center">
                    <p class="text-gray-400 dark:text-gray-500">No blogs found. <a href="{{ route('blogs.create') }}" class="text-blue-400 hover:text-blue-600 dark:text-blue-300 dark:hover:text-blue-400">Create a new blog</a>.</p>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
