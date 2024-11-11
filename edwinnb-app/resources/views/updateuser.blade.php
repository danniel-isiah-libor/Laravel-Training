<x-layout.main>
    
    <div class="container">
    <form action="{{ route('users.updateuser') }}" method="POST">  
        @csrf  
        <br>
        <h2>Profile Update</h2>
        <br>
        <x-form.input label="name" type='text' name="name"  value="{{ auth()->user()->name }}"/>

        <br>
        <x-form.input label="Email" type='text' name="email" value="{{ auth()->user()->email }}"/>

        <br>

        <x-form.input label="Current Password" type='text' name="current_password"/>

        <br>

        <x-form.input label="Password" type='password' name="password"/>

        <br>

        <x-form.input label="Confirm Password" type='password' name="password_confirmation"/>

        <br>

        <x-form.button label="Update" />

        <br>
    </form>      
    </div>

    <div class="container">
        <a href="">Cancel</a>
    </div>
    

</x-layout.main>
