@extends('layouts.app')

@section('content')

        <div class="card card-cascade wider reverse mt-5 pt-4">
        <div class="">

                <!--Section: Content-->
                <section class="dark-grey-text">
              
                  <!-- Shopping Cart table -->
                  @if(count($cart))
                  <div class="table-responsive">
              
                    <table class="table product-table mb-0">
              
                      <!-- Table head -->
                      <thead class="mdb-color blue lighten-4">
                        <tr>
                          <th></th>
                          <th class="font-weight-bold">
                            <strong>Producto</strong>
                          </th>
                          <th class="font-weight-bold">
                            <strong>Peso</strong>
                          </th>
                          <th></th>
                          <th class="font-weight-bold">
                            <strong>Precio</strong>
                          </th>
                          <th class="font-weight-bold">
                            <strong>Cantidad</strong>
                          </th>
                          <th class="font-weight-bold">
                            <strong>Subtotal</strong>
                          </th>
                          <th></th>
                        </tr>
                      </thead>
                      <!-- /.Table head -->
              
                      <!-- Table body -->
                      <tbody>
              
                        <!-- First row -->
                        @foreach ($cart as $item)
                        <tr>
                          <th scope="row">
                            <img src="/imagenes/productos/{{$item->image}}" alt="" class="img-fluid z-depth-0" width="100">
                          </th>
                          <td>
                            <h5 class="mt-3">
                              <strong>{{$item->name}}</strong>
                            </h5>
                            <p class="text-muted">{{$item->category->name}}</p>
                          </td>
                          <td>{{$item->extract}}</td>
                          <td></td>
                          <td>${{number_format($item->price,2)}}</td>
                          <td>
                            <div class="input-group mb-3">
                                    <input class="form-control"  aria-describedby="basic-addon2"
                            type="number"
                            min="1"
                            max="50"
                            value="{{ $item->quantity }}"
                            id="product_{{ $item->id }}"
                            >
                                    <div class="input-group-append">
                                            <a href="#" class="btn btn-info btn-sm btn-update-item input-group-text" 
                                            data-href="{{ route('cart-update',$item->slug) }}"
                                            data-id="{{ $item->id }}" id="basic-addon2"><i class="fas fa-sync"></i></a>
                                      
                                    </div>
                                  </div>
                          </td>
                          <td class="font-weight-bold">
                            <strong>${{number_format($item->price * $item->quantity,2)}}</strong>
                          </td>
                          <td>
                            
                            <a href="{{route('cart-delete',$item->slug)}}" class="btn btn-sm btn-primary"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        @endforeach
                        <!-- /.First row -->
              

              
                        <!-- Fourth row -->
                        
                        
                        <tr>
                          <td colspan="3"></td>
                          <td>
                            <h4 class="mt-2">
                              <strong>Total</strong>
                            </h4>
                          </td>
                          <td class="text-right">
                            <h4 class="mt-2">
                              <strong>${{number_format($total,2)}}</strong>
                            </h4>
                          </td>
                          <td colspan="3" class="text-right">
                                <a href="{{route('order-save')}}" class="btn btn-primary "><i class="fas fa-angle-right right"></i> Terminar Pedido</a>
                            
                          </td>
                        </tr>
                        <!-- Fourth row -->
              
                      </tbody>
                      <!-- /.Table body -->
              
                    </table>
              
                  </div>
                  @else
                  <h3><span class="label label-warning">No hay elementos</span></h3> 
                  <a href="{{route('carrito')}}" class="btn btn-info">Comprar</a>     
                  @endif
                  <!-- /.Shopping Cart table -->
              
                </section>
                <!--Section: Content-->
              
              
              </div>
            </div>



@endsection
    