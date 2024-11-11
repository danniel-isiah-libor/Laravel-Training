<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="w-1/2 rounded-lg p-6 bg-transparent">
                    <h2 class="mb-4 text-2xl text-white text-center">Your Post</h2>
                    <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2 text-left">
                            {{ $post->title }}
                        </h3>
                        <p class="text-gray-700 dark:text-gray-300 text-left">
                            {{ $post->body }}
                        </p>

                        <hr class="my-4 border-gray-300 dark:border-gray-600 mt-2">

                        <p class="text-gray-600 dark:text-gray-300 text-right">
                            Author: {{ $post->user->email }}
                        </p>

                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="mt-4">
                                <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Add a Comment</label>
                                <div class="mt-1">
                                    <textarea name="body" id="comment" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">{{ old('body') }}</textarea>
                                </div>
                            </div>

                            <div class="flex justify-right space-x-4 mt-4">
                                <button type="submit" class="rounded-md ml-2 bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Submit Comment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
