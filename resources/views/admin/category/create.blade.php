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
                  
                  <div class="card-body px-sm-5 pt-0">  
{!! Form::open(['action'=>'Admin\CategoryController@store']) !!}

    <div class="form-group">
    <label for="name">Nombre:</label>
{!!
    Form::text(
        'name',
        null,
        array(
            'class'=>'form-control @error(name) is-invalid @enderror',
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
            <label for="description">Descripcion:</label>
        {!!
            Form::text(
                'description',
                null,
                array(
                    'class'=>'form-control @error(name) is-invalid @enderror'
                    
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
{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('category') }}" class="btn btn-warning">Cancelar</a>
  

{!! Form::close() !!}
</div>
                  </div>
        </div>
</div>
<div class="col">
    
</h3>
</div>
</div>
@endsection