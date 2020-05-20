@extends('admin.partials.template')

@section('content')


<header class="bg-primary text-center py-5 mb-4">
        <div class="container">
          <h1 class="font-weight-light text-white">Panel de Administrador</h1>
        </div>
      </header>
      
      <!-- Page Content -->
      <div class="container">
        <div class="row">
          <!-- Team Member 1 -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              
              <a href="{{ route('category') }}">
              <div class="card-body text-center">
                <h2 class="card-title mb-0"><i class="fab fa-elementor"></i> Categorias</h2>
                <div class="card-text text-black-50"></div>
              </div>
              </a>
            </div>
          </div>
          <!-- Team Member 2 -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              
              <a href="{{ route('adm-product') }}">
              <div class="card-body text-center">
                <h2 class="card-title mb-0"><i class="fas fa-carrot"></i> Productos</h2>
                <div class="card-text text-black-50"></div>
              </div>
            </a>
            </div>
          </div>
          
          <!-- Usuarios -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              
              <a href="{{ route('adm-user') }}">
              <div class="card-body text-center">
                <h2 class="card-title mb-0"><i class="fas fa-users-cog"></i> Usuarios</h2>
                <div class="card-text text-black-50"></div>
              </div>
            </a>
            </div>
          </div>
        
          <!-- PEdidos -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              <a href="{{ route('adm-order') }}">
              <div class="card-body text-center">
                
                <h2 class="card-title mb-0"><i class="fas fa-shopping-cart"></i> Pedidos</h2>
                <div class="card-text text-black-50"></div>
              </div>
              </a>
            </div>
          </div>
          <!-- Recetas -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              <a href="{{ route('adm-recipe') }}">
              <div class="card-body text-center">
                
                <h2 class="card-title mb-0"><i class="far fa-file-alt"></i> Recetas</h2>
                <div class="card-text text-black-50"></div>
              </div>
              </a>
            </div>
          </div>

          <!-- Reportes -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              <a href="{{ route('adm-reports') }}">
              <div class="card-body text-center">
                
                <h2 class="card-title mb-0"><i class="fas fa-calendar-alt"></i> Reportes</h2>
                <div class="card-text text-black-50"></div>
              </div>
              </a>
            </div>
          </div>

          <!-- Acceso a Noticias -->
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-0 shadow">
              <a href="{{ route('adm-news') }}">
              <div class="card-body text-center">
                
                <h2 class="card-title mb-0"><i class="far fa-newspaper"></i> Noticias</h2>
                <div class="card-text text-black-50"></div>
              </div>
              </a>
            </div>
          </div>

        </div>
        <!-- /.row -->
      
      </div>
      <!-- /.container -->
      
@endsection