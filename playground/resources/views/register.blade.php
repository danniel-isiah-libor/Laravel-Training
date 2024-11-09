<x-layout.main>
    <x-slot:footer>
        <h1>THIS IS A FOOTER</h1>
    </x-slot:footer>

    <x-slot:header>
        <h1>THIS IS A HEADER</h1>
    </x-slot:header>

    <x-form.quote />

    <div class="container">
        <x-form.input label="Name" />

        <br>

        <x-form.input label="Email" type="email" />

        <br>

        <x-form.input label="Password" type="password" />

        <br>

        <x-form.input label="Confirm Password" type="password" />

        <br>

        <x-form.button label="Register" />
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
