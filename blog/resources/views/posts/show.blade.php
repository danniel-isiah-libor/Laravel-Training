<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if($post->user_id === auth()->user()->id)

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route ('posts.edit', $post)}}">EDIT POST</a>
    
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete POST</button>
            </form>
        </div>
        @endif
     
        
          {{-- <x-posts.form :isEdit="true" :post="$post" /> --}}

          Title: {{$post->title}}
          <br>
          
          Body: {{$post->body}}
          <br>
          Written by: {{$post->user->email}}
          
      </div>
  </div>
       
 
</x-app-layout>
