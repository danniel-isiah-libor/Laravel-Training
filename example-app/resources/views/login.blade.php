
<x-layout.main>



   <div class="container">
     <form action="{{ route('users.login')}}" method="POST" class="form-control">

            @csrf 
                <br>
                <h1>Login Form</h1>
                <br>
                <x-form.input label="Username" name="email"/>
                <br>
                <x-form.input label="Password" name="password"/>

                <br>
                <x-form.button label="Login" />
           
    </form>

    <x-slot:footer>
        No account? <a href="{{ route('users.register') }}">Register Here</a>
    </x-slot:footer>   
    
   </div>
</x-layout.main>


