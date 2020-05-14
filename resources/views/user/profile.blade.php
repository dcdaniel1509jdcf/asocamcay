@extends('layouts.app')

@section('content')
    <div class="row mt-5 pt-4">
            <div class="col"></div>
            <div class="col-6 ">
    <!-- Card -->
    <div class="card booking-card ">
      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="text-center font-weight-bold "><a>Mi Cuenta</a></h4>
        <!-- Data -->
       <hr>
    @if (Auth::user()->email != $user->email){
        <script>window.location = "/";</script>
    }
    @endif
    <h3>@if (count($errors)>0) 
            @include('admin.partials.errors')
        @endif
    </h3>
        <!-- Text -->
        {!! Form::model($user, array('action' => array('user\UserController@update', $user))) !!}
        <input type="hidden" name="_method" value="PUT"> 
        <div class="md-form input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon">Apellido y Nombre</span>
                </div>
                {!! 
                    Form::text(
                        'last_name', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingresa los apellidos...',
                        )
                    ) 
                !!}
                {!! 
                    Form::text(
                        'name', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingresa el nombre...',
                        )
                    ) 
                !!}
        </div>
        <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon" id="material-addon1">CI</span>
                </div>
                {!! 
                    Form::text(
                        'ci', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingresa la Cedula',
                        )
                    ) 
                !!}        
        </div>
        <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon" id="material-addon2">Contacto</span>
                </div>
                {!! 
                    Form::text(
                        'contact', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingresa el Telefono / Celular',
                        )
                    ) 
                !!}
        </div>
        <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon" id="material-addon2">Email</span>
                </div>
                {!! 
                    Form::text(
                        'email', 
                        null, 
                        array(
                            'class'=>'form-control',
                            'placeholder' => 'Ingresa el email',
                            //'required' => 'required'
                        )
                    ) 
                !!}
        </div>
        <div class="md-form input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon">Dirección</span>
                </div>
                {!! 
                    Form::text(
                        'address', 
                        null, 
                        array(
                            'class'=>'md-textarea form-control',
                            'placeholder' => 'Ingresa la Direccion',
                            //'required' => 'required'
                        )
                    ) 
                !!}
              </div>
              <div class="input-group px-5"> <div class="custom-control custom-checkbox">
                    {!! Form::checkbox('notice', null, $user->notice == 1 ? true : false, array('class'=>'custom-control-input','id'=>"defaultChecked2")) !!}
                    <label class="custom-control-label" for="defaultChecked2">Subscripcion</label>
                  </div></div>
                  <hr class="md-form input-group">
                  <h6 class="text-center">Actualizar Contraseña ?</h6>
                        <fieldset >
                                <div class="md-form input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text md-addon">Contraseña</span>
                                    </div>
                                    {!! 
                                        Form::password(
                                            'password', 
                                            array(
                                                'class'=>'form-control',
                                                //'required' => 'required'
                                            )
                                        ) 
                                    !!}
                                </div> <!-- form-group// -->
                                <div class="md-form input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text md-addon" id="material-addon2">Confirmar Contraseña</span>
                                    </div>
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
                            </fieldset>    
        <div class="md-form form-group">
            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary btn-block')) !!}
        </div> <!-- form-group// -->  
        {!! Form::close() !!}
      </div>
    </div>
    <!-- Card -->
            </div>
            <div class="col">
          </div>
@endsection
