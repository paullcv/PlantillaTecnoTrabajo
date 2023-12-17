@extends('layouts.form')

@section('content')
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesión</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="text-center text-muted mb-2">
                                <h4>Se encontro el siguiente error.</h4>
                            </div>
                            <div class="alert alert-primary alert-dismissible text-white" role="alert">
                                <span class="text-sm"> {{ $errors->first() }} </span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                        @else
                            <div class="text-center text-muted mb-4">
                                <small>Ingresa tus credenciales para ingresar al sistema</small>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" role="form" class="text-start">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                {{-- <label class="form-label">Email</label> --}}
                                <input type="email" placeholder="Correo Electronico" class="form-control" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" >
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                {{-- <label class="form-label">Password</label> --}}
                                <input type="password" placeholder="Contraseña" class="form-control" name="password" required
                                    autocomplete="current-password">
                            </div>
                            <div class="form-check form-switch d-flex align-items-center mb-3">
                                <input class="form-check-input"name="remember" type="checkbox" id="remember" checked
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label mb-0 ms-3" for="remember">Recordar Sesión</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Inicia
                                    Sesión</button>
                            </div>
                            <p class="mt-4 text-sm text-center">
                                No tienes una cuenta?
                                <a href="{{ route('register') }}"
                                    class="text-primary text-gradient font-weight-bold">Registrarse</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
