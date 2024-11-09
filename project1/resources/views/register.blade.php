<x-layout.main>
    <div class="container">
        <form action="{{ route('users.store') }}" method = "POST">
            @csrf
            <x-form.input name="name" label="Name" type="text"/>
            <x-form.input name="email" label="Email" type="email"/>
            <x-form.input name="password" label="Password" type="password"/>
            <x-form.input name="password_confirmation" label="Confirm Password" type="password"/>
            <x-form.button label="Register" />
        </form>
    </div>
</x-layout.main>