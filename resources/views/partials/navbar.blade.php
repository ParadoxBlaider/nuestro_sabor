<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#981;</span> Nuestro Sabor</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/restaurants')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Restaurantes
                    </a>
                </li>
                <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/stockpiles')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Reservas
                    </a>
                </li>

                <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/restaurants/create')}}">
                        <span>&#10010</span> Nuevo restaurante
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
