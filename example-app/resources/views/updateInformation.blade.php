
<x-layout.main>
    {{-- <x-slot:header>
        <H1>header</H1>
     </x-slot:header> --}}

    <div class="container">
        <form action="{{ route('users.update-Info')}}" method="POST">

             @csrf
             
             {{-- header --}}
             <br>
             <h3 class="fw-bold text-warning">UPDATE INFORMATION</h3>
             <hr>
             {{-- {{ auth()->user()->email }} --}}
            <x-form.input label="Name"   name="name" :value="auth()->user()->name"/>
            
            <br>
            <x-form.input label="Email" type="email" name="email" :value="auth()->user()->email"/> 
        
            <br>
            
            <x-form.input label="Current Password" type="password" name="current_password" /> 
            <br>
            <x-form.input label="Password" type="password" name="password" /> 
          <br>
            <x-form.input label="Confirm Password" type="password" name="password_confirmation"/> 
        
            <br> 
         
            <x-form.button label="UPDATE"/>
 
        </form>
      
     </div>
     <br>
<hr>
<x-slot:footer>
    <h3 class="fw-bold text-warning">FOOTER</h3>
 </x-slot:footer>
<hr>
  
    
</x-layout.main>
 