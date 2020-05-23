@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-5">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Receta</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0"> 
        {!! Form::model($recipe, array('action' => array('Admin\RecipeController@update', $recipe->id),'enctype' => 'multipart/form-data')) !!}
                    
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
                <label for="name">Nombre:</label>
            {!! Form::text(
                    'name',
                    null,
                    array(
                        'class'=>'form-control  @error(name) is-invalid @enderror',
                        'placeholder'=>'Ingresar el nombre.',
                        'autofocus'=>'autofocus'
                        
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
                            'class'=>'form-control  @error(notes) is-invalid @enderror'
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
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-recipe') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}

</div>
        </div>
    </div>

<div class="col">
    
</div>
</div>
@endsection