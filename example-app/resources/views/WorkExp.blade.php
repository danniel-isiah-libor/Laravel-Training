<x-layout.main>
    <x-slot:header>
        <h1>Work Experience</h1>
    </x-slot:header>

    <div class="container">
        <form action="{{ route('users.SaveWorkEx') }}" method="POST">
            @csrf

            <x-form.input label="Company" name="company"/>

            <br>
    
            <x-form.input label="Start Date" type="date" name="start_date"/>
    
            <br>
    
            <x-form.input label="End Date" type="date" name="end_date"/>
    
            <br>
    
            <x-form.input label="Role" name="role"/>
    
            <br>
    
            <x-form.button label="Submit" />
        </form>
       
    </div>

    <x-slot:footer>
        <h1>THIS IS A FOOTER</h1>
    </x-slot:footer>

    <?php
    // if (true) {
    //     echo '<h1> hello world </h1>';
    // }
    ?>

    {{-- {{ json_encode((new \App\Models\Profile())->getProfile()) }} --}}

    {{-- @if (true)
        <h1>hello world</h1>
    @endif --}}

</x-layout.main>