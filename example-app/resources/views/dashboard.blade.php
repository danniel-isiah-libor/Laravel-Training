<x-layout.main>
    <div class="container-fliud">
        
        <h1 class="text-center">WELCOME DASHBOARD</h1> 

        {{ auth()->user()->email }}

        <br>
        <br>
      <div class="container text-center">
        <a href="{{ route('logout') }}" class="btn btn-danger">logout</a>
      </div>
    </div>

    <x-slot:footer>
       <h1 class="text-center "> FOOTER</h1>
    </x-slot:footer>
</x-layout.main>