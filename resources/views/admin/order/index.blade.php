@extends('admin.partials.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
            <strong>Pedidos Registrados </strong>
          </h3>
    </div>
    <div class="page">
            
        <div class="table-responsive">
            <table class="table table-striped table-borderless table-hover">
                    
                <thead>
                    <tr>
                        <th>Ver Detalle</th>
                        
                        <th>Fecha</th>
                        <th>Cliente</th>
                        
                        <th>Total</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                                <a 
                                    href="#" 
                                    class="btn btn-primary btn-sm m-0 waves-effect btn-detalle-pedido"
                                    data-id="{{ $order->id }}"
                                    data-path="{{ route('admin.order.getItems') }}"
                                    data-toggle="modal" 
                                    data-target="#myModal"
                                    data-token="{{ csrf_token() }}"
                                >
                                <i class="fas fa-external-link-alt"></i>
                                </a>
                            </td>
                           
                            
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->user->name . " " . $order->user->last_name }}</td>
                           
                            
                            <td>${{ number_format($order->subtotal ,2) }}</td>
                            <td>
                                {!! Form::open(['route' => ['adm-delete-order', $order->id]]) !!}
                                    <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger btn-sm m-0 waves-effect">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        
        <?php echo $orders->render(); ?>
        
    </div>
    
</div>
@include('admin.partials.modal-detalle-pedido')
@endsection