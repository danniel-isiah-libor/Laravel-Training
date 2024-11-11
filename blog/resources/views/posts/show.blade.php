<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ($post->user_id === auth()->user()->id)
            <a href="{{ route('posts.edit', $post) }}">Edit Post</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Post</button>
            </form>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Title: {{ $post->title }}

            <br>

            Body: {{ $post->body }}

            <br>

            Written by: {{ $post->user->email }}
        </div>
    </div>
</x-app-layout>
