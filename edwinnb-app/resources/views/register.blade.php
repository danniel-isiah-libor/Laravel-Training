<x-layout.main>
    
    <div class="container">
    <form action="{{ route('users.store') }}" method="POST">  
        @csrf  
        <br>
        <h2>Register</h2>
        <x-form.quote />
        <br>
        <x-form.input label="Name" type='text' name="name"/>

        <br>

        <x-form.input label="Email" type='text' name="email"/>

        <br>

        <x-form.input label="Password" type='password' name="password"/>

        <br>

        <x-form.input label="Confirm Password" type='password' name="password_confirmation"/>

        <br>

        <x-form.button label="Register" />

    </form>
    </div>
    

</x-layout.main>



