<x-layout.main>
    
    <div class="container">
        <h2>Welcome</h2>
        <br>
            {{ auth()->user()->email }}
        <br>
        <br>


        <a href="{{ route('logout') }}" class="btn btn-danger">Log out</a>
    </div>
    

</x-layout.main>

