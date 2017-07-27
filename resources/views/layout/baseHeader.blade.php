   <header>
  @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/accueil') }}">Accueil</a>
                        <a href = "{{ url('/addMusiques') }}">Ajouter une chanson</a>
                        <a href = "{{ url('/addAuthor') }}">Ajouter un artiste</a>
                        <a href="{{ url('/accueil') }}">Logout</a>
                        
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    
                    @endif
                </div>
            @endif 
        </header>