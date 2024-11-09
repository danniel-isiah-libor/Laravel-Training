<x-layout.main>
<x-slot:header>
    this is a header </x-slot:header>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Registration</h1>
                <x-form.qoute />
            </div>
            <div class="panel-body">
                <x-form.input label="Fullname" type="text" /> <br>
                <x-form.input label="Email Address" type="email" /> <br>
                <x-form.input label="Password" type="password" /> <br>
                <x-form.input label="Confirm Password" type="password" /> <br>

                {{-- <x-form.button label="Register" :data="$data" /> --}}
                <x-form.button label="Register" />
            </div>
        </div>

    </div>
    @if (false)
        <h1>Hello World!</h1>
    @endif
    <x-slot:footer>
        this is a footer </x-slot:footer>
</x-layout.main>
