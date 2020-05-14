@extends('layouts.app')

@section('content')
              
    <!-- Card -->
    <div class="card card-cascade wider reverse mt-5 pt-4">
      <div class="card-body card-body-cascade ">
            <div class="row">
                    <div class="col-lg-5">
                      <!--Carousel Wrapper-->
                      <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                        data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <img class="d-block w-100"
                              src="/imagenes/productos/{{ $product->image }}"
                              alt="First slide">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-7">
                      <hr>
                            <h5 class="text-uppercase">
                                    <strong class="blue-text">{{ $product->category->name }}</strong>
                                  </h5>
                      <h2 class="h2-responsive product-name text-uppercase">
                        <strong class="red-text">{{ $product->name }}</strong>
                      </h2>
                      <h5 class="mb-2">
                        <span class="alert alert-info col-md-5 " role="alert">
                          <strong>Precio: $ {{ $product->price }}</strong> <i class="fas fa-arrow-alt-circle-right"></i> {{ $product->extract }}.
                        </span>
                    
                      </h5>
                      <br>
                      
                      
                        <div>
                          <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                            <div class="card">
                              <!-- Card header -->
                              <div class="card-header  light-blue " role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                  aria-controls="collapseOne1">
                                  <h5 class="mb-0 white-text">
                                   Descripcion <i class="fas fa-angle-down rotate-icon"></i>
                                  </h5>
                                </a>
                              </div>
                              <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                  {{$product->description}}
                                </div>
                              </div>
                            </div>
                          </div>
                            <div>
                             
                                <div class="md-form form-lg col-md-4">
                                  <div class="md-form input-group mb-2">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text md-addon" id="basic-addon2">Cantidad </span>
                                    </div>
                                    
                                  </div>  
                               
                        <input class="form-control"  aria-describedby="basic-addon2"
                type="number"
                min="1"
                max="50"
                value="{{ $product->quantity }}"
                id="product_{{ $product->id }}"
                >


                                    
                                  </div>

                                
                                    
                                    
                                            <a href="#" class="btn btn-default waves-effect btn-add2-item " 
                                            data-href="{{ route('cart-add2',$product->slug) }}"
                                            data-id="{{ $product->id }}" id="basic-addon2"><i class="fas fa-cart-plus ml-2" aria-hidden="true"></i> Añadir</a>
                         
                         
                                    
                         
                                            <a href="{{ route('carrito')}}" class="btn btn-secondary waves-effect">Cancelar</a>
                        </div>
                      </div>
                      <hr>
                      

















                     
                    </div>
                  </div>
      </div>
    </div>
    <!-- Card -->                                                           
@endsection