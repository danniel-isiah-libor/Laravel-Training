<x-layout.main>
    <x-slot:header>
        This is a header
    </x-slot:header>

    <x-slot:footer>
        This is a footer
    </x-slot:footer>

    <div class="container text-center">
        <h1>Welcome to Dashboard</h1>

        {{ auth()->user()->email }}

        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>
</x-layout.main>
