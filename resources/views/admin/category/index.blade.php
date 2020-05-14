@extends('admin.partials.template')


@section('content')
<div class="container ">

  <div class="text-center">
    <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
      <strong>Categorias Registradas </strong><a class="btn btn-warning btn-sm m-0 waves-effect" href="{{ route('create-category') }}"><i class="fas fa-plus"></i></a>
    </h3>

    </div>    

    <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>Editar</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($categories as $item)
                <tr>
                        <td><a href="{{ route('edit',$item)}}" class="btn btn-success btn-sm"><i class="fas fa-pen-square"></i></a></td>
                        
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->description}}</td>
                        <td>{!! Form::open(['route'=>['eliminar',$item]]) !!}
                          <input type="hidden" name="_method" value="DELETE">
<button onclick="return confirm('eliminar registro?')" class="btn btn-danger btn-sm m-0 waves-effect"><i class="far fa-trash-alt"></i></button>
                      
                      
                      {!! Form::close() !!}
                  </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
      @endsection