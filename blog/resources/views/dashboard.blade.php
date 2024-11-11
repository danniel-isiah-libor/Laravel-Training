<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="w-1/2 text-center rounded-lg p-6 bg-transparent">
                    <h2 class="mb-6 text-2xl text-white">What would you like to do?</h2>
                    <div class="space-y-4">
                        <a href ="#" class="block w-full py-3 bg-gray-600 text-white text-lg rounded-lg hover:bg-gray-700">
                            Create a Post
                        </a>
                        <a href ="#" class="block w-full py-3 bg-gray-600 text-white text-lg rounded-lg hover:bg-gray-700">
                            View All Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
