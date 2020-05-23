@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">
 
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Producto</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0"> 
        {!! Form::model($product, array('action' => array('Admin\ProductController@update', $product->slug), 'enctype' => 'multipart/form-data')) !!}
                    
        <input type="hidden" name="_method" value="PUT" >
    
        <div class="form-group">
            <label class="control-label" for="category_id">Categoría</label>
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
                <label for="name">Nombre:</label>
            {!! Form::text(
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
            <label for="extract">Extracto:</label>
            
            {!! 
                Form::text(
                    'extract', 
                    null, 
                    array(
                        'class'=>'form-control @error(extract) is-invalid @enderror',
                        
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
            <label for="image" >Imagen:</label>
            {!! 
                Form::file('image')  
            !!}
        </div>
        <div class="form-group">
    
           
            <div class="custom-control custom-checkbox">
                <input type="checkbox"  class="custom-control-input" id="defaultUnchecked" name="visible" {{ $product->visible == 1 ? "checked='checked'" : '' }}>
           
                <label class="custom-control-label" for="defaultUnchecked">Mostrar producto?</label>
                 </div>
        </div>

        
        
        
        <div class="form-group">
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-product') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}
</div>
</div>

</div>
<div class="col">
   
</div> 
</div>
@endsection