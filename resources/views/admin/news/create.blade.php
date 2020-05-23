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
                        'class'=>'form-control @error(title) is-invalid @enderror',
                        'placeholder' => 'Ingresa el Titulo',
                        'autofocus' => 'autofocus'
                    )
                ) 
            !!}
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
        </div>
        
        <div class="form-group">
            <label for="description">Descripcion:</label>
            
            {!! 
                Form::textarea(
                    'description', 
                    null, 
                    array(
                        'class'=>'form-control @error(description) is-invalid @enderror',
                        'placeholder' => 'Ingrese una descripcion',
                    )
                ) 
            !!}
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
        </div>
        
        <div class="form-group">
            <label for="content">Contenido:</label>
            
            {!! 
                Form::textarea(
                    'content', 
                    null, 
                    array(
                        'class'=>'form-control @error(content) is-invalid @enderror',
                        'id'=>'content'
                    )
                ) 
            !!}
            @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
        </div>
       
             

       
        
        <div class="form-group">
            <label for="image" class="">Imagen:</label>
            
            {!! 
                Form::file('image') 
            !!}
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
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
  
</div>
</div>
@endsection