<x-layout.main>
    <x-slot:header>
        This is Login Page
    </x-slot:header>

    <x-slot:footer>
        No account yet? <a href="{{ route('users.register') }}">Register here</a>
    </x-slot:footer>

    <form class="container form-control" action="{{ route('users.login') }}" method="POST">
        @csrf

        <x-form.input label="Email" type="email" name="email" />

        <br>

        <x-form.input label="Password" type="password" name="password" />

        <br>

        <x-form.button label="Login" />

    </form>
</x-layout.main>
