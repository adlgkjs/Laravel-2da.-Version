<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="navbar-brand" href="/">                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                      </svg>
                </a>
                <a class="nav-link fs-5 {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page" 
                    href="{{route('home')}}" >Home</a>
                <a class="nav-link fs-5 {{request()->routeIs('cursos.*') ? 'active' : ''}}" 
                    href="{{route('cursos.index')}}">Cursos</a>
                <a class="nav-link fs-5 {{request()->routeIs('nosotros') ? 'active' : ''}}" 
                    href="{{route('nosotros')}}">Nostros</a>
                <a class="nav-link fs-5 {{request()->routeIs('contactanos.index') ? 'active' : ''}}" 
                    href="{{route('contactanos.index')}}">Contactanos</a>
            </div>
          </div>
        </div>
      </nav>   
</header>
