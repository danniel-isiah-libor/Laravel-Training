<x-layout.main>
<x-slot:title>Login</x-slot:title>
            <x-slot:header>
                <h2 class="text-center text-primary"> Login Here</h2>
            </x-slot:header>

            <!-- <x-form.quote/> -->
            <form class="mx-auto p-2" action="{{route('users.auth')}}" method="POST">
                @csrf
                    <x-form.input label="Email" type="email" name="email"/>
                    <x-form.input label="Password" type="password" name="password"/>

                    <!-- use :data="$data" for as is instead of making it as a string -->
                    <x-form.button label="Login" />

                <x-slot:footer>
                    No Account Yet? <a href="{{route('users.register')}}">Register Here</a>
                </x-slot:footer>
            </form>
</x-layout.main>
 