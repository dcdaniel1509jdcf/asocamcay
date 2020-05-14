@extends('layouts.app')

@section('content')
@foreach($orders as $order)
@if (Auth::user()->id !=$order->user->id)
<script>window.location = "/";</script>
@endif
@endforeach
<!-- Table with panel -->
<div class="mt-5 pt-4 card card-cascade narrower">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
    </div>

    <a href="" class="white-text mx-3">Mis Pedidos</a>

    <div>
      <a href="{{route('carrito')}}" class="btn btn-outline-white btn-rounded btn-sm px-2">
         <i class="fas fa-plus mt-0"> </i>
      </a>
      
    </div>

  </div>
  <!--/Card image-->
  <div class="px-5">
    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0 table-borderless table-responsive">
        <!--Table head-->
        <thead>
          <tr>
            <th class="th-lg">
              Ver detalle
            </th>
            <th class="th-lg">
              Estado
            </th>
            <th class="th-lg">
              Cliente
            </th>
            <th class="th-lg">
              Fecha de pedido
            </th>
            <th class="th-lg">
              Subtotal
            </th>
            <th class="th-lg">
              Total
            </th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
                @foreach($orders as $order)
          <tr>
            
            <td>
                    <a 
                    href="#" 
                    class="btn btn-outline-primary waves-effect btn-sm btn-detalle-pedido"
                    data-id="{{ $order->id }}"
                    data-path="{{ route('user.order.getItems') }}"
                    data-toggle="modal" 
                    data-target="#myModal"
                    data-token="{{ csrf_token() }}"
                >
                <i class="fas fa-external-link-alt"></i>
                </a>
            </td>
            <td>Pendiente</td>
            <td>{{ $order->user->last_name . " " . $order->user->name }}</td>
            <td>{{ $order->created_at }}</td>
            <td>$ {{ number_format($order->subtotal,2) }}</td>
            <td>$ {{ number_format($order->subtotal + $order->shipping,2) }}</td>
          </tr>
          @endforeach
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>
  </div>
</div>
<!-- Table with panel -->
@include('admin.partials.modal-detalle-pedido')
@endsection