@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-2">
    
    
    <div class="row justify-content-center">
     
      @if ($products->isEmpty())
      <article class="article">
        <h3 class="indigo-text h3 text-center">Recetas</h3>
        <h4 class="h4 text-center indigo-text">No Disponibles</h4>
      </article>
      @endif 
     
        @foreach ($products as $product)
    
        <div class="col-sm-3 mb-4 ">
            <div class="card card-cascade wider">
  
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img  class="card-img-top" src="/imagenes/productos/{{$product->image}}" alt="Card image cap" height="200">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              
                <div class="card-body card-body-cascade text-center">


                  <div>

                    <!-- Title -->
                    <p class="card-text"><i class="fas fa-cubes"> </i> {{$product->category->name}}</p>
                    <h4 class="indigo-text h4 mb-2"><a href="{{ route('product-detail',$product->slug)}}">{{$product->name}}
                    </a></h4>
                    <!-- Subtitle -->
                   
              
                  </div>

                  <h4 class="h5 indigo-text">$ {{$product->price}}</h4>
                  
                 
                  
                  <a href="{{ route('cart-add', $product->slug)}}" class="btn btn-default waves-effect" > <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i> Añadir</a>
                  <a class="btn btn-outline-default waves-effect" href="{{ route('product-detail',$product->slug)}}"><i class="fas fa-plus-circle"></i> Detalle</a>
                </div>
              </div>
        </div>
        @endforeach

      </div>


   
    
  </div>

    @endsection
