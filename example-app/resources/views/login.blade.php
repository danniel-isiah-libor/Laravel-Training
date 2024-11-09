<x-layout.main>
    <x-slot:header>
        Login Page
    </x-slot:header>

    <div class="container">
        <form action="{{ route('users.login') }}" method="POST">
            @csrf

            <x-form.input label="Email" type="email" name="email"/>
    
            <br>
    
            <x-form.input label="Password" type="password" name="password"/>
    
            <br>
    
            <x-form.button label="Login" />
        </form>
       
    </div>

    <x-slot:footer>
        No account yet? <a href="{{ route('users.register') }}">Register</a>
    </x-slot:footer>
</x-layout.main>