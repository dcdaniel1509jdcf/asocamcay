@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">

    
        

        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Nueva Categoria</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0">  
{!! Form::open(['action'=>'Admin\CategoryController@store']) !!}

    <div class="form-group">
    <label for="name">Nombre:</label>
{!!
    Form::text(
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
            <label for="description">Descripcion:</label>
        {!!
            Form::text(
                'description',
                null,
                array(
                    'class'=>'form-control'
                    
                )
            )
            !!}
            
</div>
<div class="form-group" hidden>
        <label for="color">color:</label>
        <input type="color" name="color" class="form-control">
</div>
<div class="form-group">
{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('category') }}" class="btn btn-warning">Cancelar</a>
  

{!! Form::close() !!}
</div>
                  </div>
        </div>
</div>
<div class="col">
    @if (count($errors)>0) 
        @include('admin.partials.errors')
    @endif
</h3>
</div>
</div>
@endsection