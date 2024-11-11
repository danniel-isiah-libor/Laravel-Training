<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            Title: {{$post->title}}
            <br />
            Body: {{$post->body}}
            <br />
            Written By: {{$post->user->email}}
        </div>
    </div>
  </x-app-layout>