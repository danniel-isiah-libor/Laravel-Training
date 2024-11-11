<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($posts as $post)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <p>Title: {{$post['title']}}</p>
                    <p>Body: {{$post['body']}}</p>
                    <p>Written By: {{$post->user->email}}</p>
                    <p>Date Published By: {{$post->created_at}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
