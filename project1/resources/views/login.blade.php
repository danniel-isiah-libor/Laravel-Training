<x-layout.main>
    <x-slot:header></x-slot:header>
    <form class="container form-control" action="{{ route('users.login') }}" method="POST">
        @csrf
        <x-form.input name="email" label="Email" type="email" />
        <x-form.input name="password" label="Password" type="password" />
        <x-slot:footer>
            No account yet? <a href="route('users.register')">Register Here</a>
        </x-slot:footer>
        <x-form.button label="Login" />
    </form>
    <x-slot:footer></x-slot:footer>
</x-layout.main>