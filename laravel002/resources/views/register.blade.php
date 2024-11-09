<x-layout.main>
    <x-slot:header>
        <h1>This is Test Header</h1>
    </x-slot:header>

    <x-slot:footer>
        <h1>This is Test Footer</h1>
    </x-slot:footer>

    <div class="container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <x-form.input label="Name:" name="name"/>

            <br>

            <x-form.input label="Email:" type="email" name="email"/>

            <br>

            <x-form.input label="Password:" type="password" name="password"/>

            <br>

            <x-form.input label="Confirm Password:" type="password" name="password_confirmation"/>

            <br>

            <x-form.button label="Register" :data="$data" />
        </form>
    </div>
</x-layout.main>
