<x-layout.main>
    <x-slot:header>
        <h1>This is Test Header</h1>
    </x-slot:header>

    <x-slot:footer>
        <h1>This is Test Footer</h1>
    </x-slot:footer>

   <div class="container">
        <x-form.input label="Name:"/>

        <br>

        <x-form.input label="Email:" type="email"/>

        <br>

        <x-form.input label="Password:" type="password"/>

        <br>

        <x-form.input label="Confirm Password:" type="password"/>

        <br>

        <x-form.button label="Register" :data="$data" />

    </div>

    
</x-layout.main>
