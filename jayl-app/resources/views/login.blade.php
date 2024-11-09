<x-layout.main>
    <form action="{{ route('users.authlogin') }}" method="POST">
        @csrf
        <div class="container">
            {{-- <x-slot:header>
                This is Loging Page</x-slot:header> --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>LOGIN</h1>

                </div>
                <div class="panel-body">

                    <x-form.input label="Email Address" type="email" name="email" /> <br>
                    <x-form.input label="Password" type="password" name="password" /> <br>

                    {{-- <x-form.button label="Register" :data="$data" /> --}}
                    <x-form.button label="login" />
                    {{-- <x-slot:footer>
                        No account yet? <a href=""> REGISTER</a>
                    </x-slot:footer> --}}
                </div>
             
            </div>
           

        </div>
    </form>
</x-layout.main>
