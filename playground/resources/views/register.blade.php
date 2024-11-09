<x-layout.main>
    <x-slot:footer>
        <h1>THIS IS A FOOTER</h1>
    </x-slot:footer>

    <x-slot:header>
        <h1>THIS IS A HEADER</h1>
    </x-slot:header>

    <x-form.quote />

    <div class="container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <x-form.input label="Name" name="name" />

            <br>

            <x-form.input label="Email" type="email" name="email" />

            <br>

            <x-form.input label="Password" type="text" name="password" />

            <br>

            <x-form.input label="Confirm Password" type="text" name="password_confirmation" />

            <br>

            <x-form.button label="Register" />
        </form>
    </div>

    <?php
    // if (true) {
    //     echo '<h1> hello world </h1>';
    // }
    ?>

    {{-- {{ json_encode((new \App\Models\Profile())->getProfile()) }} --}}

    {{-- @if (true)
        <h1>hello world</h1>
    @endif --}}

</x-layout.main>
