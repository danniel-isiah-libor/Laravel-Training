<x-layout.main>

    <div class="container">
        <form action="{{ route('users.info') }}" method="POST">
            @csrf
            <h1>MY INFORMATION</h1>
            
            <x-form.input label="LastName" type="text" name="lastName" />
            <br>
            <x-form.input label="FirstName" type="text" name="firstName"/>
            <br>
            <x-form.button label="submit"/>
        </form>
    </div>

    <x-slot:footer>
        FOOTER
     </x-slot:footer>   
     
     
</x-layout.main>