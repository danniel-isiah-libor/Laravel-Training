<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="w-1/2 rounded-lg p-6 bg-transparent">
                    <ul role="list" class="divide-y divide-gray-100">
                        @foreach ($posts as $post )
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <a href="{{route('posts.show', $post)}}" class="text-sm font-semibold text-white">{{$post -> title}}</a>
                                        <p class="mt-1 truncate text-xs text-gray-500">{{$post->user-> email}}</p>
                                    </div>
                                </div>
                                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm text-white">{{$post->user->name}}</p>
                                    <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">{{$post->updated_at->diffForHumans()}}</time></p>
                                    
                                    <div class="flex mt-3 gap-x-2">
                                        @if (!($post->user_id === auth()->user()->id))
                                        <a href="{{route('comments.create', $post)}}" class="text-sm px-3 py-1 font-semibold text-white bg-gray-400 rounded hover:bg-gray-500">Add Comment</a>
                                        @endif
                                        @if ($post->user_id === auth()->user()->id)
                                            <a href="{{route('posts.edit', $post)}}" class="text-sm px-3 py-1 font-semibold text-white bg-gray-600 rounded hover:bg-gray-500">Update</a>
                                            <form action="{{route('posts.destroy', $post)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-sm px-3 py-1 font-semibold text-white bg-red-600 rounded hover:bg-red-500">Delete</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
