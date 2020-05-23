@extends('admin.partials.template')

@section('content')
<div class="container ">
<div class="div">

  <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
    <strong>Productos Registrados </strong><a class="btn btn-warning btn-sm m-0 waves-effect" href="{{ route('adm-create-product') }}"><i class="fas fa-plus"></i></a>
  </h3>
    
    </div> 
    <div class="page">   
    <div class="table-responsive">
    <table class="table  table-striped table-borderless table-hoverr">
        <thead >
          <tr>
            <th>Editar</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Peso</th>
            <th>Precio</th>
            <th>Visible</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($products as $product)
                <tr>
                        <td><a href="{{ route('adm-edit-product',$product->slug)}}" class="btn btn-success btn-sm m-0 waves-effect "><i class="fas fa-pen-square"></i></a></td>
                        
                        <td><img class="rounded mb-0" src='/imagenes/productos/{{ $product->image }}' width="60"></td>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>{{ $product->extract}}</td>
                        <td>$ {{ number_format($product->price,2)}}</td>
                        
                        <td>{{ $product->visible==1 ? "Si" : "No"}}</td>
                        <td>{!! Form::open(['route'=>['adm-delete-product',$product->slug]]) !!}
                          <input type="hidden" name="_method" value="DELETE">
        <button onclick="return confirm('eliminar registro?')" class="btn btn-danger btn-sm m-0 waves-effect"><i class="far fa-trash-alt"></i></button>
                                              
                      {!! Form::close() !!}
                  </td>
                      </tr>
          
          @endforeach
         
        </tbody>
      </table>
    </div>
    <hr>
        
      
      <?php echo $products->render(); ?>
    </div>
    </div>
      @endsection