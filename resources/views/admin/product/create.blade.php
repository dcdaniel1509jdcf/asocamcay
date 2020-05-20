@extends('admin.partials.template')

@section('content')
  <div class="row">
<div class="col">
    
    </div> 
<div class="col-sm-6">
                <div class="card">
            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Nuevo Producto</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0">     
{!! Form::open(['action'=>'Admin\ProductController@store' , 'files'=>true]) !!}
<div class="form-group">
        <label class="control-label" for="category_id">Categoría</label>
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
            <label for="name">Nombre del producto:</label>
            
            {!! 
                Form::text(
                    'name', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'placeholder' => '',
                        'autofocus' => 'autofocus'
                    )
                ) 
            !!}
        </div>
        
        <div class="form-group">
            <label for="extract">Peso:</label>
            
            {!! 
                Form::text(
                    'extract', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'placeholder' => '',
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
            <label for="price">Precio:</label>
            
            {!! 
                Form::text(
                    'price', 
                    null, 
                    array(
                        'class'=>'form-control',
                        'placeholder' => '0.1',
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
            <label for="visible">Visible:</label>
            
            {!! 
                Form::checkbox(
                    'visible', 
                    null, 
                    array(
                        'class'=>'form-control',
                    )
                ) 
            !!}
        </div>
    
<div class="form-group">
{!! Form::submit('Guardar',array('class'=>'btn btn-primary')) !!}    
<a href="{{ route('adm-product') }}" class="btn btn-warning">Cancelar</a>
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