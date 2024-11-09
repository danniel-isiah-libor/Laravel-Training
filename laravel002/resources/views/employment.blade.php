<x-layout.main>
    <x-slot:header>
        <h1>Employment Details</h1>
    </x-slot:header>

    <x-slot:footer>
        <h1>Welcome to Inventive Media</h1>
    </x-slot:footer>

    <div class="container">
        <form action="{{ route('employment.redirect') }}" method="POST" class="container form-control" >
            @csrf
            <x-form.input label="Company Name:" name="company_name"/>

            <br>

            <x-form.input label="Start:" type="number" name="start_year"/>

            <br>

            <x-form.input label="End:" type="number" name="end_year"/>

            <br>

            <x-form.input label="Position:" name="position"/>

            <br>

            <x-form.button label="Submit" />
        </form>
    </div>


</x-layout.main>
