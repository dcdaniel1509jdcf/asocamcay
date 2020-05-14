@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-2">
    <h3>@if (count($errors)>0) 
        @include('layouts.errors')
    @endif
</h3>
    
    <div class="row">
        @foreach ($products as $product)
    
        <div class="col-md-3 mb-4">
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
                    <h4 class="card-title font-weight-bold mb-2"><a href="{{ route('product-detail',$product->slug)}}">{{$product->name}}
                    </a></h4>
                    <!-- Subtitle -->
                   
              
                  </div>

                  <p class=" h5 "><i class="fas fa-dollar-sign"> </i> {{$product->price}}</p>
                  
                 
                  
                  <a href="{{ route('cart-add', $product->slug)}}" class="btn btn-default waves-effect" > <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i> Añadir</a>
                  <a class="btn btn-outline-default waves-effect" href="{{ route('product-detail',$product->slug)}}"><i class="fas fa-plus-circle"></i> Detalle</a>
                </div>
              </div>
        </div>
        @endforeach

      </div>


   
    
  </div>

    @endsection
