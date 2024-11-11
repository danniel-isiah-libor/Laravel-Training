<x-layout.main>

    {{-- <h1>Update Records</h1> --}}
    <form class="container" action="" method="">
        @csrf

        <x-form.input label="Name" :value="auth()->user()->name" name="name" />
            <x-form.input label="Email" type="email" :value="auth()->user()->email" name="email" />
            <x-form.input label="Current Password" type="password" name="current_password" />
            <x-form.input label="Password" type="password" name="password" />
            <x-form.input label="Confirm Password" type="password" name="password_confirmation" />
            <x-form.button label="Update Profile" />
    </form>
</x-layout.main>
