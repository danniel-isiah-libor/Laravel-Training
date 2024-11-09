
<x-layout.main>
<x-slot:title>Register</x-slot:title>
            <x-slot:header>
                <h2 class="text-center text-primary"> Register Here</h2>
            </x-slot:header>

            <!-- <x-form.quote/> -->
            <form class="mx-auto p-2" action="{{route('users.store')}}" method="POST">
                @csrf
                    <x-form.input label='Name' type="text" name="name"/> 
                    <x-form.input label="Email" type="email" name="email"/>
                    <x-form.input label="Password" type="password" name="password"/>
                    <x-form.input label="Confirm Password" type="password" name="password_confirmation"/>

                    <!-- use :data="$data" for as is instead of making it as a string -->
                    <x-form.button label="Register" />

                    <x-slot:footer>
                    Already Registered? <a href="{{route('users.login')}}">Login Here</a>
                </x-slot:footer>
            </form>
</x-layout.main>
 