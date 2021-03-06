@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">


        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Categoria</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0">  
{!! Form::model($category,array('action'=>array('Admin\CategoryController@update',$category))) !!}
<input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="name">Nombre:</label>
            {!! Form::text(
                    'name',
                    null,
                    array(
                        'class'=>'form-control @error(name) is-invalid @enderror',
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
                    'class'=>'form-control @error(description) is-invalid @enderror'
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
{!! Form::submit('Actualizar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('category') }}" class="btn btn-warning">Cancelar</a>
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