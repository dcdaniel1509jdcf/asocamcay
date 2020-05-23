@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-sm-6">
    
        <div class="card">

            <h3 class="card-header info-color white-text text-center py-4">
              <strong>Nuevo Usuario</strong>
            </h3>
                  <br>
                  <div class="card-body px-lg-5 pt-0">  
{!! Form::open(['action'=>'Admin\UserController@store']) !!}
        
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
                            <label for="last_name">Apellido:</label>
                            
                            {!! 
                                Form::text(
                                    'last_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control @error(last_name) is-invalid @enderror',
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
                                            'class'=>'form-control @error(ci) is-invalid @enderror',
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
                                                'placeholder' => '022222222 / 0999999999',
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
                            <label for="password">Password:</label>
                            
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
                            <label for="confirm_password">Confirmar Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control @error(password_confirmation) is-invalid @enderror',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Tipo:</label>
                            
                            {!! Form::radio('type', 'user', true) !!} User
                            {!! Form::radio('type', 'admin') !!} Admin
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
                            
                            {!! Form::checkbox('active', null, true) !!}
                        </div>
                        <div class="form-group" hidden>
                                <label for="notice">Subscripcion:</label>
                                
                                {!! Form::checkbox('active', null, true) !!}
                            </div>
                        
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
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