@extends('admin.partials.template')

@section('content')
<div class="container ">
<div class="div">
  <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
    <strong>Recetas Registradas </strong><a class="btn btn-warning btn-sm m-0 waves-effect" href="{{ route('adm-create-recipe') }}"><i class="fas fa-plus"></i></a>
  </h3>

    </div>    

    <table class="table  table-hover">
        <thead class="thead-light">
          <tr>
            <th>Editar</th>
           
            <th>Imagen</th>
            <th>Receta</th>
            <th>Ingredientes</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($recipe as $recipe)
                <tr>
                        <td><a href="{{ route('adm-edit-recipe',$recipe->id)}}" class="btn btn-success btn-sm m-0 waves-effect"><i class="fas fa-pen-square"></i></a></td>
                        
                        <td><img src='/imagenes/productos/{{ $recipe->image }}' width="60"></td>
                        <td>{{ $recipe->name}}</td>
                        <td><?php 
                          echo nl2br($recipe->ingredients);
                          ?></td>
                          <td>{!! Form::open(['route'=>['adm-delete-recipe',$recipe->id]]) !!}
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