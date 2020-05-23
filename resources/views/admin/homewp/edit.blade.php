@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-5">
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Noticia</strong>
            </h3>
                  <br>
                  <div class="card-body px-sm-5 pt-0"> 
        {!! Form::model($home, array('action' => array('Admin\HomeController@update', $home->id),'enctype' => 'multipart/form-data')) !!}
                    
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
                <label for="homecode">Codigo de Registro:</label>
            {!! Form::text(
                    'homecode',
                    null,
                    array(
                        'class'=>'form-control @error(homecode) is-invalid @enderror',
                        'autofocus'=>'autofocus'
                        
                    )
                )
                !!}
                @error('homecode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror                
            </div>  
        
                  
            <div class="form-group">
                <label for="homedesc">descripcion:</label>
                
                {!! 
                    Form::textarea(
                        'homedesc', 
                        null, 
                        array(
                            'class'=>'form-control @error(homecode) is-invalid @enderror'
                        )
                    ) 
                !!}
                @error('homecode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
           
            <div class="form-group">
                <label for="homedir">Direccion:</label>
                
                {!! 
                    Form::text(
                        'homedir', 
                        null, 
                        array(
                            'class'=>'form-control @error(homedir) is-invalid @enderror'
                        )
                    ) 
                !!}
                @error('homedir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="homeemail">Correo:</label>
                
                {!! 
                    Form::text(
                        'homeemail', 
                        null, 
                        array(
                            'class'=>'form-control @error(homeemail) is-invalid @enderror'
                        )
                    ) 
                !!}
                @error('homeemail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            
            <div class="form-group">
                <label for="hometelf">Telefono:</label>
                {!! 
                    Form::text(
                        'hometelf', 
                        null, 
                        array(
                            'class'=>'form-control @error(hometelf) is-invalid @enderror'
                        )
                    ) 
                !!}
                @error('hometelf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group" >
                <label >Ingrese nuevas imagenes para Actualizar</label>
            </div>
          
            <div class="form-group">
                <label for="homeimg1"><i class="far fa-image"></i></label>
                {!! 
                    Form::file('homeimg1') 
                !!}
            </div>
            <div class="form-group">
                <label for="homeimg2"><i class="far fa-image"></i></label>
                {!! 
                    Form::file('homeimg2') 
                !!}
            </div>
            <div class="form-group">
                <label for="homeimg3"><i class="far fa-image"></i></label>
                {!! 
                    Form::file('homeimg3') 
                !!}
            </div>
            <div class="form-group">
                <label for="homeimg4"><i class="far fa-image"></i></label>
                {!! 
                    Form::file('homeimg4') 
                !!}
            </div>
            <div class="form-group">
                <label for="homeimg5"><i class="far fa-image"></i></label>
                {!! 
                    Form::file('homeimg5') 
                !!}
            </div>

            
        
        <div class="form-group">
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-home') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}

</div>
        </div>
    </div>

<div class="col">
    
</div>
</div>
@endsection