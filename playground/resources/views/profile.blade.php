<x-layout.main>
    <x-slot:header>
        This is a header
    </x-slot:header>

    <x-slot:footer>
        This is a footer
    </x-slot:footer>

    <form class="container" action="{{ route('profile.update') }}" method="POST">
        @csrf
        {{-- @method('DELETE') --}}

        <x-form.input label="Name" :value="auth()->user()->name" name="name" />

        <x-form.input label="Email" type="email" :value="auth()->user()->email" name="email" />

        <x-form.input label="Current Password" type="password" name="current_password" />

        <x-form.input label="Password" type="password" name="password" />

        <x-form.input label="Confirm Password" type="password" name="password_confirmation" />

        <x-form.button label="Update Profile" />
    </form>
</x-layout.main>
