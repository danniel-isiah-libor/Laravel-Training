<x-layout.main>
    <x-slot:header>
        <h1>Registration Form</h1>
    </x-slot:header>

    <div class="container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <x-form.input label="Name" name="name"/>

            <br>
    
            <x-form.input label="Email" type="email" name="email"/>
    
            <br>
    
            <x-form.input label="Password" type="password" name="password"/>
    
            <br>
    
            <x-form.input label="Confirm Password" type="password" name="password_confirmation"/>
    
            <br>
    
            <x-form.button label="Register" />
        </form>
       
    </div>

    <x-slot:footer>
        <h1>THIS IS A FOOTER</h1>
    </x-slot:footer>

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