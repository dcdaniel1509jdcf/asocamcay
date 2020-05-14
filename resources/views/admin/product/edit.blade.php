@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-5">
 
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Producto</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0"> 
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
                        'class'=>'form-control',
                        'placeholder'=>'Ingresar el nombre.',
                        'autofocus'=>'autofocus'
                        
                    )
                )
                !!}
            </div>  
        
        <div class="form-group">
            <label for="extract">Extracto:</label>
            
            {!! 
                Form::text(
                    'extract', 
                    null, 
                    array(
                        'class'=>'form-control',
                        
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
            <input type="checkbox" name="visible" {{ $product->visible == 1 ? "checked='checked'" : '' }}>
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
    @if (count($errors)>0) 
    @include('admin.partials.errors')
@endif
</div> 
</div>
@endsection