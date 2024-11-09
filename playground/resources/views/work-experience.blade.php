<x-layout.main>
    <x-slot:header>
        This is work experience
    </x-slot:header>

    <x-slot:footer>
        This is a footer
    </x-slot:footer>

    <form action="{{ route('work-experiences.store') }}" method="POST">
        @csrf

        <x-form.input label="Company Name" name="company" />

        <br>

        <x-form.input label="Start Date" name="start_date" />

        <br>

        <x-form.input label="End Date" name="end_date" />

        <br>

        <x-form.input label="Job Role" name="role" />

        <br>

        <x-form.button label="Save" />
    </form>
</x-layout.main>
