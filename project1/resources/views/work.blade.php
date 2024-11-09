<x-layout.main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-slot:header>
                    <h2>Work Experience</h2>
                </x-slot:header>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.SaveWork') }}" method="POST" class="form-control">
                    @csrf
                    <x-form.input name="company" label="Company" type="text" />
                    <x-form.input name="start_date" label="Date Started" type="text" class="datepicker" />
                    <x-form.input name="end_date" label="Date Ended" type="text" />
                    <x-form.input name="position" label="Position" type="text" />
                    <x-form.button label="Submit" />
                </form>
            </div>
            <div class="col-md-12">
                <x-slot:footer>
                </x-slot:footer>
            </div>
        </div>
    </div>
</x-layout.main>