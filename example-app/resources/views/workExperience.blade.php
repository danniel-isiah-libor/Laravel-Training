
<x-layout.main>



    <div class="container">
      <form action="{{ route('users.workExp') }}" method="POST" class="form-control"> 
             @csrf 
                 <br>
                 <h1>Work Experience</h1>
                 <br>
                 <x-form.input label="Company" type="text" name="company"/>
                 <br>
                 <x-form.input label="Date Start" type="date" name="dataStart"/> 
                 <br>
                 <x-form.input label="Date End" type="date" name="dataEnd"/> 
                 <br>
                 <x-form.input label="Role" type="text"  name="role"/>
                 <br>
                 <x-form.button label="Submit" /> 
     </form>
 
     <x-slot:footer>
        FOOTER
     </x-slot:footer>   
     
    </div>
 </x-layout.main>
 
 