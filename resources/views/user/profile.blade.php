@extends('layouts.app')

@section('content')
    <div class="row mt-4 ">
            <div class="col"></div>
            <div class="col-sm-6 ">
    <!-- Card -->
    <div class="card booking-card ">
      <!-- Card content -->
      <h4 class="card-header info-color white-text text-center font-weight-bold "><a>Mi Cuenta</a></h4>
      <div class="card-body">
        <!-- Title -->
        
        <!-- Data -->
       
    @if (Auth::user()->email != $user->email){
        <script>window.location = "/";</script>
    }
    @endif
   
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
                            'class'=>'form-control @error(last_name) is-invalid @enderror',
                            'placeholder' => 'Ingresa el apellido',
                        )
                    ) 
                !!}
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                
                
        </div>
        <div class="md-form input-group">
            <div class="input-group-prepend">
              <span class="input-group-text md-addon">Nombre</span>
            </div>
            
            {!! 
                Form::text(
                    'name', 
                    null, 
                    array(
                        'class'=>'form-control @error(name) is-invalid @enderror',
                        'placeholder' => 'Ingresa el nombre',
                    )
                ) 
            !!}
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
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
                            'class'=>'form-control @error(ci) is-invalid @enderror',
                            'placeholder' => 'Ingresa la Cedula',
                        )
                    ) 
                !!}
                @error('ci')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror        
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
                            'class'=>'form-control @error(contact) is-invalid @enderror',
                            'placeholder' => 'Ingresa el Telefono / Celular',
                        )
                    ) 
                !!}
                @error('contact')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
                            'class'=>'form-control @error(email) is-invalid @enderror',
                            'placeholder' => 'Ingresa el email',
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
        <div class="md-form input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text md-addon">Dirección</span>
                </div>
                {!! 
                    Form::text(
                        'address', 
                        null, 
                        array(
                            'class'=>'md-textarea form-control @error(address) is-invalid @enderror',
                            'placeholder' => 'Ingresa la Direccion',
                            //'required' => 'required'
                        )
                    ) 
                !!}
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
                                </div> <!-- form-group// -->
                                <div class="md-form input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text md-addon" id="material-addon2">Confirmar Contraseña</span>
                                    </div>
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
