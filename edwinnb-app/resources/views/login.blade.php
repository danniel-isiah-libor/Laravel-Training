<x-layout.main>
    
    <div class="container">
    <form action="{{ route('users.authlogin') }}" method="POST">  
        @csrf  
        <br>
        <h2>Log in</h2>
        <br>
        <x-form.input label="Email" type='text' name="email"/>

        <br>

        <x-form.input label="Password" type='password' name="password"/>

        <br>

        <x-form.button label="Login" />

        <br>
    </form>      
    </div>

    <div class="container">
        <a href="{{ route('register') }}">Register here</a>
    </div>
    

</x-layout.main>
