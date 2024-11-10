<x-layout.main>
    <x-slot:header></x-slot:header>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        {{Auth()->user()->email}}
        <p>Return to <a href="{{route('users.logout')}}" class='btn btn-warning'>Logout</a></p>
    </div>
    <x-slot:footer></x-slot:footer>
</x-layout.main>