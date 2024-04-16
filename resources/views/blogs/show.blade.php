<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Blog Details') }}
        </h2>
    </x-slot>

    <main class="bg-gray-900 dark:bg-gray-800 min-h-screen">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <!-- Displayed blog data here -->
                    <h1 class="text-white text-3xl font-semibold mb-4">{{ $blog->title }}</h1>
                    <p class="text-white">{{ $blog->content }}</p>
                    <!-- Back button -->
                    <div class="mt-8">
                        <a href="{{ route('blogs.index') }}" class="inline-block px-4 py-2 text-sm font-semibold tracking-wider text-white uppercase bg-gray-800 dark:bg-gray-700 rounded-lg hover:bg-gray-700 dark:hover:bg-gray-600">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
