<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">-->
    <!-- Bootstrap core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/mdb.min.css" rel="stylesheet">
    
    <link href="css/style.min.css" rel="stylesheet">
     Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

    <style type="text/css">
      html,
      body,
      header,
      .carousel {
        height: 60vh;
      }
  
      @media (max-width: 740px) {
  
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }
  
      @media (min-width: 800px) and (max-width: 850px) {
  
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }
  
    </style>
    
</head>
<body class="white">
    <div id="app">
                       
                    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
                            <div class="container">
                        
                              <!-- Brand -->
                              <a class="navbar-brand waves-effect" href="{{ url('/') }}">
                                <strong class="blue-text">ASOMCAMCAY</strong>
                              </a>
                        
                              <!-- Collapse -->
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                        
                              <!-- Links -->
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                                <!-- Left -->
                                <ul class="navbar-nav mr-auto">
                                  <li class="nav-item ">
                                    <a class="nav-link waves-effect" href="{{ url('/') }}">Inicio
                                      <span class="sr-only">(current)</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link btn-outline-success rounded mb-0 waves-effect" href="{{ route('carrito') }}" >Compra  <i class="fas fa-shopping-cart"></i></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link waves-effect" href="{{ route('homenews') }}" >Noticias</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link waves-effect" href="{{ route('homerecipe') }}" >Recetas</a>
                                  </li>
                                
                                  <li class="nav-item">
                                        <a class="nav-link waves-effect" href="{{ route('inicio') }}#contact" >Contactos</a>
                                      </li>
                                     
                                </ul>
                        
                                <!-- Right -->
                                <ul class="navbar-nav nav-flex-icons">
                                    
                                  <li class="nav-item  ">
                                    <a class="nav-link waves-effect border border-danger rounded " href="{{ route('cart-show') }}">
                                      <span class="badge red z-depth-1 mr-1"> i </span>
                                      <i class="fas fa-shopping-cart"></i>
                                    </a>
                                  </li>
                                  
                                 @guest
                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-user"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                          aria-labelledby="navbarDropdownMenuLink-333">
                                          <a class="dropdown-item" href="{{ route('login') }}">Ingresar</a>
                                          <a class="dropdown-item" href="{{ route('register') }}">Registrar</a>
                                        </div>
                                      </li>
                                @else
                                
                                  
                                    
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="fas fa-user-circle"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" aria-labelledby="navbarDropdownMenuLink-333">
                                            <a class="dropdown-item" href="{{ route('user-edit-profile',Auth::user()->id ) }}"><i class="fas fa-cogs"></i > {{ __('Mi perfil') }}</a> 
                                            <a class="dropdown-item" href="{{ route('user-order',Auth::user()->id ) }}"><span class="fas fa-cubes"></span> {{ __('Pedidos') }}</a> 
                                            @if (Auth::user()->id==1)
                                            <a class="nav-link waves-effect bg-red rounded mb-0 waves-effect" href="{{ route('adm-home') }}" >Panel de Admistrador</a>
                                        @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                             <span class="fas fa-sign-out-alt"></span> {{ __('Cerrar Sesion') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                          
                                        </div>
                                    </li>
                                @endguest
                                </ul>
                              </div>
                            </div>
                    </nav>

            <main>
                <div class="container py-4">
                       
        
            @if(\Session::has('message'))
		        @include('layouts.message')
	        @endif
            @yield('content')
        
                </div>
            </main>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3 pt-4 ">
    
      <!-- Footer Elements -->
      <div class="container">
    
        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1"></h5>
          </li>
          <li class="list-inline-item">
            <a href="#!" class="btn btn-outline-white btn-rounded">ASOMCAMCAY</a>
          </li>
        </ul>
        <!-- Call to action -->
    
      </div>
      <!-- Footer Elements -->
    
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#!"> JC</a>
      </div>
      <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
</body>
  
  
 

 
 <!-- qq <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap tooltips -->
<script src="{{ asset('js/main.js') }}" ></script>
<script src="{{ asset('admin/js/main.js') }}" ></script>

</html>
