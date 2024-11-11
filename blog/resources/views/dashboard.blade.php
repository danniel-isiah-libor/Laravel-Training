<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($posts as $post)
                    <li>
                        Title: <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                        <br>
                        Written By: {{ $post->user->email }}
                        <br>
                        {{ $post->updated_at->diffForHumans() }}
                    </li>
                    <br>
                @endforeach
            </ul>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
