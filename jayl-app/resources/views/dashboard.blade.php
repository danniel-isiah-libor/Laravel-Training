<x-layout.main>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('logout')}}">Logout</a>
      </nav>

<div>
    <h1>Welcome to Dashboard</h1>
    {{auth()->user()->email}}
</div>
</x-layout.main>