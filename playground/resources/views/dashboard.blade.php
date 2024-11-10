<x-layout.dashboard>
    <x-slot:title>Dashboard</x-slot:title>
    <x-form.nav/>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 text-center rounded rounded-lg border border-1 p-4">
            {{auth()->user()->email}}
            <h2 class="mb-4 text-white">What would you like to do?</h2>
            <div class="d-grid gap-3">
                <button type="button" class="btn btn-secondary btn-lg">Create a Post</button>
                <button type="button" class="btn btn-secondary btn-lg">Add a Comment</button>
                <button type="button" class="btn btn-secondary btn-lg">View All Posts</button>
            </div>
        </div>
    </div>



    <!-- <x-layout.dashboard>
    <x-slot:title>Dashboard</x-slot:title>
    <x-form.nav/>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-1/2 text-center rounded-lg border border-gray-300 p-6 bg-transparent">
            <h2 class="mb-6 text-2xl text-white">What would you like to do?</h2>
            <div class="space-y-4">
                <button type="button" class="w-full py-3 bg-blue-600 text-white text-lg rounded-lg hover:bg-blue-700">
                    Create a Post
                </button>
                <button type="button" class="w-full py-3 bg-blue-600 text-white text-lg rounded-lg hover:bg-blue-700">
                    Add a Comment
                </button>
                <button type="button" class="w-full py-3 bg-blue-600 text-white text-lg rounded-lg hover:bg-blue-700">
                    View All Posts
                </button>
            </div>
        </div>
    </div>
</x-layout.dashboard> -->


</x-layout.dashboard>
