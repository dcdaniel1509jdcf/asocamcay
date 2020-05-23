@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Nueva Receta</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0"> 
                   
{!! Form::open(['action'=>'Admin\RecipeController@store' , 'files'=>true]) !!}

    
    <div class="form-group">
            <label for="name">Nombre:</label>
            
            {!! 
                Form::text(
                    'name', 
                    null, 
                    array(
                        'class'=>'form-control @error(name) is-invalid @enderror',
                        'placeholder' => 'Ingresa el nombre...',
                        'autofocus' => 'autofocus'
                    )
                ) 
            !!}
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        
        <div class="form-group">
            <label for="extract">Ingredientes:</label>
            
            {!! 
                Form::textarea(
                    'ingredients', 
                    null, 
                    array(
                        'class'=>'form-control  @error(ingredients) is-invalid @enderror',
                        'placeholder' => 'Ingrese el ...',
                    )
                ) 
            !!}
            @error('ingredients')
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
        
        <div class="form-group" hidden>
            <label for="description">Notas:</label>
            
            {!! 
                Form::textarea(
                    'notes', 
                    null, 
                    array(
                        'class'=>'form-control @error(notes) is-invalid @enderror'
                    )
                ) 
            !!}
            @error('notes')
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
{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('adm-recipe') }}" class="btn btn-warning">Cancelar</a>
{!! Form::close() !!}

          </div>
 
</div>
        </div>
</div>
<div class="col">
  
</div>
</div>
@endsection