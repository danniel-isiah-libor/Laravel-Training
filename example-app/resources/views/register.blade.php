
<x-layout.main>
    <x-slot:header>
        <H1>header</H1>
     </x-slot:header>

    <div class="container">
        <x-form.quote/>
     
        <x-form.input label="Name"/>
    
        <br>
        <x-form.input label="Email" type="email"/> 
    
        <br>
        <x-form.input label="Password" type="password"/> 
    
    
        <br>
        <x-form.input label="Confirm Password" type="password"/> 
    
        <br> 
     
        <x-form.button label="Submit" :data="$data"/>
     </div>

     <x-slot:footer>
        <H1>footer</H1>
     </x-slot:footer>
</x-layout.main>
 