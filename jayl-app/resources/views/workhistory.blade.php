<x-layout.main>
    <form action="{{ route('users.work') }}" method="GET">
        @csrf
        <div class="container">
        <x-form.input label="Company" type="text" name="Company" /> <br>
        <x-form.input label="StartDate" type="Date" name="StartDate" /> <br>
        <x-form.input label="EndDate" type="Date" name="EndDate" /> <br>
        <x-form.input label="Position" type="text" name="Position"  /> <br>
        <x-form.button label="submit" />
    </div>
    </form>
</x-layout.main>