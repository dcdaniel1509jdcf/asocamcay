<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">


    <style type="text/css"> 
        h1 { 
            color:green; 
        } 
        .xyz { 
            background-size: auto; 
            text-align: center; 
            padding-top: 100px; 
        } 
        .btn-circle.btn-sm { 
            width: 40px; 
            height: 40px; 
            padding: 6px 0px; 
            border-radius: 15px; 
             
            text-align: center; 
        } 
        .btn-circle.btn-md { 
            width: 50px; 
            height: 50px; 
            padding: 7px 10px; 
            border-radius: 25px; 
            font-size: 10px; 
            text-align: center; 
        } 
        .btn-circle.btn-xl { 
            width: 70px; 
            height: 70px; 
            padding: 10px 16px; 
            border-radius: 35px; 
            font-size: 12px; 
            text-align: center; 
        } 
    </style>
    
</head>
<body class="white">
    <div id="app">
                   <header>    
                    <nav class="navbar fixed-top navbar-expand-lg  navbar-dark  indigo lighten-0 scrolling-navbar">
                            <div class="container">
                        
                              <!-- Brand -->
                              <a class="navbar-brand waves-effect" href="{{ url('/') }}">
                                <strong class="">ASOMCAMCAY</strong>
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
                                  <li class="nav-item active">
                                    <a class="nav-link waves-effect" href="{{ route('adm-home') }}">Panel
                                      <span class="sr-only">(current)</span>
                                    </a>
                                  </li>
                                  
                                  <!-- Categorias -->
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Categorias</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('category') }}">Mostar</a>
                                      <a class="dropdown-item" href="{{route('create-category')}}">Crear</a>
                                    </div>
                                  </li>
                                  <!-- Noticias -->
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Noticias</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('adm-news') }}">Mostar</a>
                                      <a class="dropdown-item" href="{{route('adm-create-news')}}">Crear</a>
                                    </div>
                                  </li>

                                  <!-- Pedidos -->
                                  <li class="nav-item">
                                    <a class="nav-link waves-effect" href="{{ route('adm-order') }}" >Pedidos</a>
                                  </li>
                                  <!-- Productos -->
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Productos</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('adm-product') }}">Mostar</a>
                                      <a class="dropdown-item" href="{{route('adm-create-product')}}">Crear</a>
                                    </div>
                                  </li>
                                  <!-- Productos -->
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Recetas</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('adm-recipe') }}">Mostar</a>
                                      <a class="dropdown-item" href="{{route('adm-create-recipe')}}">Crear</a>
                                    </div>
                                  </li>
                                  <!-- Productos -->
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Usuarios</a>
                                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ route('adm-user') }}">Mostar</a>
                                      <a class="dropdown-item" href="{{route('adm-create-user')}}">Crear</a>
                                    </div>
                                  </li>
                                 
                                 
                                      
                                </ul>
                        
                                <!-- Right -->
                                <ul class="navbar-nav nav-flex-icons">
                                    
                                  
                                  
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
                    
                    </header>
            <main class="pt-5 mx-lg-5">
                <div class="container-fluid mt-5">
                 
        
                  @if(\Session::has('message'))
                  @include('layouts.message')
                  @endif
            @yield('content')
        
                </div>
            </main>
    </div>
    <!-- Footer -->
 
    <!-- Footer -->
   
</body>
  
  
 

 
 <!-- qq <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<!-- Bootstrap tooltips -->
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{ asset('js/main.js') }}" ></script>
<script src="{{ asset('admin/js/main.js') }}" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

 <script type="text/javascript">
     CKEDITOR.replace( 'content' );
 </script> 

</html>
