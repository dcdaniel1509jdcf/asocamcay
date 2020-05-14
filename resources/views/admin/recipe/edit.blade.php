@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-5">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Receta</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0"> 
        {!! Form::model($recipe, array('action' => array('Admin\RecipeController@update', $recipe->id),'enctype' => 'multipart/form-data')) !!}
                    
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
                <label for="name">Nombre:</label>
            {!! Form::text(
                    'name',
                    null,
                    array(
                        'class'=>'form-control',
                        'placeholder'=>'Ingresar el nombre.',
                        'autofocus'=>'autofocus'
                        
                    )
                )
                !!}
            </div>  
        
            <div class="form-group">
                <label for="extract">Ingredientes:</label>
                
                {!! 
                    Form::textarea(
                        'ingredients', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingrese el ...',
                        )
                    ) 
                !!}
            </div>
        
            <div class="form-group">
                <label for="description">Descripción:</label>
                
                {!! 
                    Form::textarea(
                        'description', 
                        null, 
                        array(
                            'class'=>'form-control'
                        )
                    ) 
                !!}
            </div>
            
            <div class="form-group">
                <label for="description">Notas:</label>
                
                {!! 
                    Form::textarea(
                        'notes', 
                        null, 
                        array(
                            'class'=>'form-control'
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
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-recipe') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}

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