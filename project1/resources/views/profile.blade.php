<x-layout.main>
    <x-slot:header></x-slot:header>
    <div class="container">
        <h1>Users Profile</h1>
        
        <form action="{{ route('users.store') }}" method = "POST">
            @csrf
            <x-form.input name="name" label="Name" type="text" value="{{auth()->user()->name}}" />
            <x-form.input name="email" label="Email" type="email" value="{{Auth()->user()->email}}" />
            <x-form.input name="current_password" label="Current Password" type="password" />
            <x-form.input name="password" label="Password" type="password" />
            <x-form.input name="password_confirmation" label="Confirm Password" type="password" />
            <x-form.button label="Update Profile" />
        </form>
        <p>Return to <a href="{{route('users.logout')}}" class='btn btn-warning'>Logout</a></p>
    </div>
    <x-slot:footer></x-slot:footer>
</x-layout.main>