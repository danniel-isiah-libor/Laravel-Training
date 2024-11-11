<x-layout.main>
    <x-slot:header>
        <p>Company Logo</p>
    </x-slot:header>

    <div class="container">
        <h2>Update User</h2>
        <br>
        <p> Hello, {{ auth()->user()->name }}</p>
        <br>
        <form class="container" action="{{ route('profile.update') }}" method="POST">
            @csrf

            <x-form.input label="Name:" :value="auth()->user()->name" name="name"/>

            <br>
    
            <x-form.input label="Email:" type="email" :value="auth()->user()->email" name="email"/> 
            <br>

            <x-form.input label="Current Password:" type="password" name="current_password"/>
            <br>

            <x-form.input label="Password:" type="password" name="password"/>

            <br>

            <x-form.input label="Confirm Password:" type="password" name="password_confirmation"/>

            <br>

            <x-form.button label="Update Profile" />
        </form>

        <br>
        
        <br>
    </div>


    <x-slot:footer>
        <p>You have been Scammed, Do you wish to  <a href="{{ route('logout') }}">logout?</a></p>
    </x-slot:footer>


    
    </div>
</x-layout.main>
