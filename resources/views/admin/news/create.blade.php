@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Nueva Noticia</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0"> 
                   
{!! Form::open(['action'=>'Admin\NewsController@store' , 'files'=>true]) !!}

    
    <div class="form-group">
            <label for="name">Titulo :</label>
            
            {!! 
                Form::text(
                    'title', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'placeholder' => 'Ingresa el Titulo',
                        'autofocus' => 'autofocus'
                    )
                ) 
            !!}
        </div>
        
        <div class="form-group">
            <label for="description">Descripcion:</label>
            
            {!! 
                Form::textarea(
                    'description', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'placeholder' => 'Ingrese una descripcion',
                    )
                ) 
            !!}
        </div>
        
        <div class="form-group">
            <label for="content3">Contenido:</label>
            
            {!! 
                Form::textarea(
                    'content', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'id'=>'content'
                    )
                ) 
            !!}
        </div>
       
        

       
        
        <div class="form-group">
            <label for="image">Imagen:</label>
            
            {!! 
                Form::file('image') 
            !!}
        </div>
        <div class="form-group">
            <label for="file">Archivo:</label>
            
            {!! 
                Form::file('file') 
            !!}
        </div>
        
        
    
<div class="form-group">
{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('adm-news') }}" class="btn btn-warning">Cancelar</a>
{!! Form::close() !!}

          </div>
 
</div>
        </div>
</div>
<div class="col">
    @if (count($errors)>0) 
                @include('admin.partials.errors')
            @endif
</div>
</div>
@endsection