@extends('layouts.app')

@section('content')
<div class="mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card">

                        <h5 class="card-header info-color white-text text-center py-4">
                          <strong>Iniciar Sesion</strong>
                        </h5>
                      
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                      
                          <!-- Form -->
                         
                              <form class="text-center" method="POST" action="{{ route('login') }}" style="color: #757575;" >
                                 @csrf
                            <!-- Email -->
                            <div class="md-form">
                              <input type="email" id="email"  class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autofocus>
                              <label for="email">E-mail</label>
                              
                              
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <!-- Password -->
                            <div class="md-form">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >
                              <label for="password">Contraseña</label>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="d-flex justify-content-around">
                              <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="remember">
                                      {{ __(' Recordar ') }}
                                  </label>  
                              </div>
                              </div>
                              
                            </div>
                      
                            <!-- Sign in button -->
                            
                            <button type="submit" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                                  {{ __('Ingresar') }}
                              </button>
                            <!-- Register -->
                            <p>Not a member?
                              <a href="{{ route('register') }}">Registrar</a>
                            </p>
                          </form>
                        </div>
                      </div>
        </div>
    </div>
</div>
@endsection
