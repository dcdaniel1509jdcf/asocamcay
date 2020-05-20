@extends('layouts.app')

@section('content')
              
    <!-- Card -->
    <div class="card card-cascade wider reverse mt-5 pt-4">
      <div class="card-body card-body-cascade ">
            <div class="row">
                    <div class="col-sm-6">
                      <!--Carousel Wrapper-->
                            
                        
                              <div class="view view-cascade overlay">
                                <img  class="img-fluid mx-auto" src="/imagenes/productos/{{$product->image}}" alt="Imagen no disponible">
                               
                              </div>



                 





                      
                    </div>
                    <div class="border-left col-sm-6 ">
                      
                            
                      <h2 class="h2-responsive product-name card-title">
                        {{ $product->name }}
                      </h2>
                      <h5 class=" card-text mb-4">
                        <strong class="">{{ $product->category->name }}</strong>
                      </h5>
                      <h5 class="mb-2">
                       
                        Precio: $ {{ $product->price }} <i class="fas fa-arrow-alt-circle-right"></i> {{ $product->extract }}.
                        
                    
                      </h5>
                      
                      
                      
                        
                          
                            
                             
                                <div class="md-form form-lg col-sm-4">
                                    
                                  <div class="md-form">
                                    
                                    <label for="product_{{ $product->id }}">Ingrese la cantidad</label>
                                      
                        <input class="form-control"  aria-describedby="basic-addon2"
                type="number"
                min="1"
                max="50"
                value="{{ $product->quantity }}"
                id="product_{{ $product->id }}"
                >
                                  </div>

                                    
                                  </div>
                                            <a href="#" class="btn btn-default waves-effect btn-add2-item " 
                                            data-href="{{ route('cart-add2',$product->slug) }}"
                                            data-id="{{ $product->id }}" id="basic-addon2"><i class="fas fa-cart-plus ml-2" aria-hidden="true"></i> Añadir</a>
                         
                         
                                    
                         
                                            <a href="{{ route('carrito')}}" class="btn btn-secondary waves-effect">Cancelar</a>
                        
                        
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
                                          
                      
                     


                     
                    </div>
                  </div>
      </div>
    </div>
    <!-- Card -->                                                           
@endsection