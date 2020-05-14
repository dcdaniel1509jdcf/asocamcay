@extends('admin.partials.template')

@section('content')
<div class="row">
    <div class="col">
        
        </div> 
    <div class="col-5">
    
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
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name">Apellido:</label>
                            
                            {!! 
                                Form::text(
                                    'last_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa los apellidos...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        <div class="form-group">
                                <label for="ci">Cedula:</label>
                                
                                {!! 
                                    Form::text(
                                        'ci', 
                                        null, 
                                        array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingresa la ci...',
                                            //'required' => 'required'
                                        )
                                    ) 
                                !!}
                            </div>
                            <div class="form-group">
                                    <label for="contact">Celular:</label>
                                    
                                    {!! 
                                        Form::text(
                                            'contact', 
                                            null, 
                                            array(
                                                'class'=>'form-control',
                                                'placeholder' => '022222222 / 0999999999',
                                                //'required' => 'required'
                                            )
                                        ) 
                                    !!}
                                </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el correo...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>                                                
                        <div class="form-group">
                            <label for="password">Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password', 
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password">Confirmar Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
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
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
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
                        @if (count($errors)>0) 
                @include('admin.partials.errors')
            @endif
                    </div>
</div>
@endsection