<x-layout.main>
    
    <div class="container">
    <form action="{{ route('users.history') }}" method="GET">  
        @csrf  
        <br>
        <h2>Work History</h2>

        <br>
        <x-form.input label="Company" type='text' name="company"/>

        <br>

        <x-form.input label="Start Date" type='text' name="startdate" class='date'/>
        {{-- <label class="form-label">Start Date</label>
        <input class="date form-control" type="text" name="startdate"> --}}

        <br>

        <x-form.input label="End Date" type='text' name="enddate" class='date'/>
        {{-- <label class="form-label">End Date</label>
        <input class="date form-control" type="text" name="enddate"> --}}

        <br>

        <x-form.input label="Position" type='text' name="position"/>

        <br>

        <x-form.button label="Submit" />

    </form>
    
    </div>
    

</x-layout.main>
