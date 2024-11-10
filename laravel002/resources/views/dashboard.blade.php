<x-layout.main>
    <x-slot:header>
        <p>Company Logo</p>
    </x-slot:header>

    <div class="container">
        <h2>Welcome to dashboard</h2>
        <br>
        {{ auth()->user()->email }}
        <br>
        <br>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        <br>
    </div>


    <x-slot:footer>
        <p>This is Pyramid schemes, Invite your friends here: <a href="{{ route('users.register') }}">register</a></p>
    </x-slot:footer>


    
    </div>
</x-layout.main>
