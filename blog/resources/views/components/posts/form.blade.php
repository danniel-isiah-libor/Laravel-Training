@props(['isEdit' => false, 'post' => null])
<form action="{{ $isEdit ? route('posts.update', $post->id) : route('posts.store')}}" method="POST">

    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif
    <div class="space-y-8">
        <div class="border-b border-gray-900/10 pb-6">
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="title" class="block text-sm font-medium text-white text-left">Title</label>
                    <div class="mt-1">
                        <input value="{{ old('title') ??  optional($post)->title}}" type="text" name="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                    <p class="mt-2 text-sm text-gray-600 text-left">Write a title about your post.</p>
                    @error('title')
                        <p class="mt-2 text-sm text-red-600 text-left">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-4">
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="body" class="block text-sm font-medium text-white text-left">Body</label>
                    <div class="mt-1">
                        <textarea name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">{{ old('body') ?? optional($post)->title}}</textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-600 text-left">Write things about your post.</p>
                    @error('body')
                        <p class="mt-2 text-sm text-red-600 text-left">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6 flex items-center justify-end gap-x-4">
        <a href="" class="text-sm font-semibold text-white">Cancel</a>
        <button type="submit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
</form>