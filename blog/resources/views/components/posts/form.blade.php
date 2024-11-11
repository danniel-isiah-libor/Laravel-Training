@props([
    'isEdit' => false,
    'post' => null,
])

<form action="{{ $isEdit ? route('posts.update', $post) : route('posts.store') }}" method="POST"
    class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @csrf

    @if ($isEdit)
        @method('PUT')
    @endif

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <input type="text" name="title" value="{{ old('title') ?? optional($post)->title }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>

            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label class="block text-sm/6 font-medium text-gray-900">Body</label>
                    <div class="mt-2">
                        <textarea name="body" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ old('body') ?? optional($post)->body }}</textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
                </div>

                @error('body')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-center gap-x-6">
        <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</form>
