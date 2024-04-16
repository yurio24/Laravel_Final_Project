<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('blogs.update', $blog->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-gray-300">Title</label>
                        <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-input mt-1 block w-full dark:bg-gray-700" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-300">Content</label>
                        <textarea name="content" id="content" class="form-textarea mt-1 block w-full dark:bg-gray-700" rows="6" required>{{ $blog->content }}</textarea>
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
