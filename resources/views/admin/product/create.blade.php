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
                        'class'=>'form-control @error(name) is-invalid @enderror',
                        'placeholder' => '',
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
            <label for="extract">Peso:</label>
            
            {!! 
                Form::text(
                    'extract', 
                    null, 
                    array(
                        'class'=>'form-control @error(extract) is-invalid @enderror',
                        'placeholder' => '',
                    )
                ) 
            !!}
            @error('extract')
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
            <label for="price">Precio:</label>
            
            {!! 
                Form::text(
                    'price', 
                    null, 
                    array(
                        'class'=>'form-control @error(price) is-invalid @enderror',
                        'placeholder' => '0.1',
                    )
                ) 
            !!}
            @error('price')
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
            
           
                
            {!! 
                Form::checkbox(
                    'visible', 
                    null, 
                    array(
                            
                    'class'=>'@error(visible) is-invalid @enderror',
                        
                    )
                ) 
            !!}
            <label class="" for="visible">Mostrar producto?</label>
            @error('visible')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror  
        
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
   
</div> 
</div>
@endsection