<x-layout.main>
    <x-slot:header></x-slot:header>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        {{Auth()->user()->email}}
        <p><a href="{{route('users.profile')}}" class='btn btn-primary'>Edit Profile</a></p>
        <p>Return to <a href="{{route('users.logout')}}" class='btn btn-warning'>Logout</a></p>
    </div>
    <x-slot:footer></x-slot:footer>
</x-layout.main>