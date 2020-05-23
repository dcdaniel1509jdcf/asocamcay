@extends('admin.partials.template')

@section('content')
<div class="container ">
<div class="div">
  <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
    <strong>Noticias Registradas </strong><a class="btn btn-warning btn-sm m-0 waves-effect" href="{{ route('adm-create-news') }}"><i class="fas fa-plus"></i></a>
  </h3> 
    </div> 
    <div class="page">   
    <div class="table-responsive">
    <table class="table  table-hover">
        <thead class="thead-light">
          <tr>
            <th>Editar</th>
            
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($news as $news) 
                <tr>
                        <td><a href="{{ route('adm-edit-news',$news->id)}}" class="btn btn-success btn-sm m-0 waves-effect"><i class="fas fa-pen-square"></i></a></td>
                        
                      
                        <td>{{ $news->title}}</td>
                        <td><?php 
                          echo nl2br($news->description);
                          ?></td>
                          <td>{!! Form::open(['route'=>['adm-delete-news',$news->id]]) !!}
                            <input type="hidden" name="_method" value="DELETE">
          <button onclick="return confirm('eliminar registro?')" class="btn btn-danger  btn-sm m-0 waves-effect"><i class="far fa-trash-alt"></i></button>
                                                
                        {!! Form::close() !!}
                    </td>
                                                
          </tr>
          @endforeach
         
        </tbody>
      </table>
      
</div>
</div>
    
    </div>
      @endsection