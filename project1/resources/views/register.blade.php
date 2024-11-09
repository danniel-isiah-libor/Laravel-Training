<x-layout.main>
    <x-slot:header>
        <h1>Header</h1>
    </x-slot:header>
    <div class="container">
        <form action="">
            <div class="form-group">
                <x-form.input label="Name" type="text" />
            </div>
            <div class="form-group">
                <x-form.input label="Email" type="email" />
            </div>
            <div class='form-group'>
                <x-form.input label="Password" type="password" />
            </div>
            <div class='form-group'>
                <x-form.input label="Confirm Password" type="password" />
            </div>
            <x-form.button label="Register" :data="$data" />
        </form>
    </div>
    <x-slot:footer>
        <h6>Footer</h6>
    </x-slot:footer>
</x-layout.main>