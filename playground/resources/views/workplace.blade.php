<x-layout.main>
<x-slot:title>Workplace</x-slot:title>
            <x-slot:header>
                <h2 class="text-center text-primary"> Workplace Information</h2>
            </x-slot:header>

            <!-- <x-form.quote/> -->
            <form class="mx-auto p-2" action="{{route('users.store-workplace')}}" method="POST">
                @csrf
                    <x-form.input label="Company" type="text" name="company"/>
                    <x-form.input label="Start" type="date" name="start"/>
                    <x-form.input label="End" type="date" name="end"/>
                    <x-form.input label="Role" type="text" name="role"/>

                    <!-- use :data="$data" for as is instead of making it as a string -->
                    <x-form.button label="Submit" />

                <x-slot:footer>
                    Already have an Account?<a href="{{route('users.login')}}">Login Here</a>
                </x-slot:footer>
            </form>
</x-layout.main>
 