<x-layout.main>
    
    <div class="container">
    <form action="{{ route('users.authlogin') }}" method="POST">  
        @csrf  
        <br>
        <h2>Log in</h2>
        <br>
        <x-form.input label="Username" type='text' name="username"/>

        <br>

        <x-form.input label="Password" type='password' name="password"/>

        <br>

        <x-form.button label="Login" />

        <br>
    </form>
        {{-- <a href="{{ route('register') }}">Register</a> --}}
    </div>
    

</x-layout.main>
