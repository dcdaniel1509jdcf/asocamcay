@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-5">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Noticia</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0"> 
        {!! Form::model($news, array('action' => array('Admin\NewsController@update', $news->id),'enctype' => 'multipart/form-data')) !!}
                    
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
                <label for="title">Nombre:</label>
            {!! Form::text(
                    'title',
                    null,
                    array(
                        'class'=>'form-control @error(title) is-invalid @enderror',
                        'autofocus'=>'autofocus'
                        
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
                <label for="description">Descripción:</label>
                
                {!! 
                    Form::textarea(
                        'description', 
                        null, 
                        array(
                            'class'=>'form-control  @error(description) is-invalid @enderror'
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
                <label for="content">contenido:</label>
                
                {!! 
                    Form::textarea(
                        'content', 
                        null, 
                        array(
                            'class'=>'form-control  @error(content) is-invalid @enderror'
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
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-news') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}

</div>
        </div>
    </div>

<div class="col">
    
</div>
</div>
@endsection