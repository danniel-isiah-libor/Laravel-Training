<x-layout.main>
    <x-slot:header>
        <h1>This is Test Header</h1>
    </x-slot:header>

    <x-slot:footer>
        <h1>This is Login Footer, <a href="{{ route('users.register') }}">register</a></h1>
    </x-slot:footer>

    <div class="container">
        <form action="{{ route('users.login-success') }}" method="POST" class="container form-control" >
            @csrf
            <x-form.input label="Email:" type="email" name="email"/>

            <br>

            <x-form.input label="Password:" type="password" name="password"/>

            <br>

            <x-form.button label="Login" />
        </form>
    </div>


</x-layout.main>
