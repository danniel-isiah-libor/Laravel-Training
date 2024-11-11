<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="w-1/2 rounded-lg p-6 bg-transparent">
                    <h2 class="mb-4 text-2xl text-white text-center">Create A Post</h2>
                    <x-posts.form/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
