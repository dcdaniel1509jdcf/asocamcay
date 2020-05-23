@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
         
        </div> 
    <div class="col-5">       
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Editar Usuario</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0"> 
        {!! Form::model($user, array('action' => array('Admin\UserController@update', $user))) !!}
                    
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="name">Nombre:</label>
            
            {!! 
                Form::text(
                    'name', 
                    null, 
                    array(
                        'class'=>'form-control @error(name) is-invalid @enderror',
                        'placeholder' => 'Ingresa el nombre...',
                        'autofocus' => 'autofocus',
                        //'required' => 'required'
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
            <label for="last_name">Apellidos:</label>
            
            {!! 
                Form::text(
                    'last_name', 
                    null, 
                    array(
                        'class'=>'form-control @error(last_name) is-invalid @enderror' ,
                        'placeholder' => 'Ingresa los apellidos...',
                        //'required' => 'required'
                    )
                ) 
            !!}
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
                <label for="ci">Cedula:</label>
                
                {!! 
                    Form::text(
                        'ci', 
                        null, 
                        array(
                            'class'=>'form-control @error(ci) is-invalid @enderror' ,
                            'placeholder' => 'Ingresa la ci...',
                            //'required' => 'required'
                        )
                    ) 
                !!}
                @error('ci')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                    <label for="contact">Celular:</label>
                    
                    {!! 
                        Form::text(
                            'contact', 
                            null, 
                            array(
                                'class'=>'form-control @error(contact) is-invalid @enderror',
                                'placeholder' => 'Ingresa el celular...',
                                //'required' => 'required'
                            )
                        ) 
                    !!}
                    @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        <div class="form-group">
            <label for="email">Correo:</label>
            
            {!! 
                Form::text(
                    'email', 
                    null, 
                    array(
                        'class'=>'form-control @error(email) is-invalid @enderror',
                        'placeholder' => 'Ingresa el correo...',
                        //'required' => 'required'
                    )
                ) 
            !!}
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        
        
        <div class="form-group">
            <label for="type">Tipo:</label>
            
            {!! Form::radio('type', 'user', $user->type=='user' ? true : false) !!} User
            {!! Form::radio('type', 'admin', $user->type=='admin' ? true : false) !!} Admin
        </div>
        
        <div class="form-group">
            <label for="address">Dirección:</label>
            
            {!! 
                Form::textarea(
                    'address', 
                    null, 
                    array(
                        'class'=>'form-control @error(address) is-invalid @enderror'
                    )
                ) 
            !!}
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="active">Active:</label>
            
            {!! Form::checkbox('active', null, $user->active == 1 ? true : false) !!}
        </div>
        
        <div class="form-group">
                <label for="notice">sub:</label>
                
                {!! Form::checkbox('notice', null, $user->notice == 1 ? true : false) !!}
            </div>
        <hr>
        
        <fieldset>
            <legend>Cambiar password:</legend>
            <div class="form-group">
                <label for="password">Nuevo Password:</label>
                
                {!! 
                    Form::password(
                        'password', 
                        array(
                            'class'=>'form-control @error(password) is-invalid @enderror',
                            //'required' => 'required'
                        )
                    ) 
                !!}
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Confirmar Nuevo Password:</label>
                
                {!! 
                    Form::password(
                        'password_confirmation',
                        array(
                            'class'=>'form-control @error(confirm_password) is-invalid @enderror',
                            //'required' => 'required'
                        )
                    ) 
                !!}
                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </fieldset><hr>
        
        <div class="form-group">
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('adm-user') }}" class="btn btn-warning">Cancelar</a>
        </div>
    
    {!! Form::close() !!}

</div>
        </div>
    </div>
    <div class="col">
        
    </div>
</div>
@endsection