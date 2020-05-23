@extends('layouts.app')

@section('content')

    <main class="pt-2">
            <div class="container wow fadeIn">
              <h2 class="my-5 h2 text-center">Detalle del Pedido</h2>
              <div class="row">
                <div class="col-sm-8 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6 mb-2">
                          <div class="md-form ">
                            <input type="text" id="firstName" class="form-control" value="{{ Auth::user()->name }}" readonly>
                            <label for="firstName" class="">Nombre</label>
                          </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                          <div class="md-form">
                            <input type="text" id="lastName" class="form-control" value="{{ Auth::user()->last_name }}" readonly>
                            <label for="lastName" class="">Apellido</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                            <div class="col-sm-6 mb-2">
                              <div class="md-form ">
                                <input type="text" id="firstName" class="form-control" value="{{ Auth::user()->ci }}" readonly>
                                <label for="firstName" class="">Cedula</label>
                              </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                              <div class="md-form">
                                <input type="text" id="lastName" class="form-control" value="{{ Auth::user()->contact }}" readonly>
                                <label for="lastName" class="">Contacto</label>
                              </div>
                            </div>
                          </div>
                      <div class="md-form mb-5">
                        <input type="text" id="email" class="form-control" placeholder="No disponible" value="{{ Auth::user()->email }}" readonly>
                        <label for="email" class="">Email</label>
                      </div>
                      <!--address-->
                      <div class="md-form mb-5">
                        <input type="text" id="address" class="form-control" placeholder="No disponible" value="{{ Auth::user()->address }}" readonly>
                        <label for="address" class="">Direccion</label>
                      </div>
                      <a href="{{route('order-detail')}}" class="btn btn-info btn-block">Finalizar</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Mis Productos</span>
                  </h4>
                  <ul class="list-group mb-3 z-depth-1">
                        @foreach($cart as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">{{$item->name}}</h6>
                        <small class="text-muted">{{$item->description}}</small>
                      </div>
                      <h6 class="text-muted">${{number_format($item->price*$item->quantity,2)}}</h6>
                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class>
                              <h3 class="my-0">Total:</h3>
                            </div>
                            <h4 >$ {{number_format($total,2)}}</h4>
                          </li>
                  </ul>
                </div>
              </div>
            </div>
          </main>
    @endsection
