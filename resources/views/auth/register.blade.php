@extends('layouts.form')

@section('content')
<div class="container my-auto">
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registrarse</h4>
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
                            <small>Ingresa tus datos para registrarte al sistema</small>
                        </div>
                    @endif

                    <form form method="POST" action="{{ route('register') }}" role="form" class="text-start">
                        @csrf

                        {{-- Nombre --}}
                        <div class="input-group input-group-outline my-3">
                            {{-- <label class="form-label">Nombre</label> --}}
                            <input type="text" placeholder="Nombre" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                        </div>

                        {{-- Correo Electronico --}}
                        <div class="input-group input-group-outline my-3">
                            {{-- <label class="form-label">Email</label> --}}
                            <input type="email" placeholder="Correo Electronico" class="form-control"name="email" value="{{ old('email') }}" required autocomplete="email" >
                        </div>

                        {{-- Contraseña --}}
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Password</label> --}}
                            <input type="password" placeholder="Contraseña" class="form-control" name="password" required autocomplete="new-password">
                        </div>
                        {{-- Confirmar Contraseña --}}
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Password</label> --}}
                            <input type="password" placeholder="Repertir Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Registrarse</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                            Ya tienes una cuenta?
                            <a href="{{ route('login') }}"
                                class="text-primary text-gradient font-weight-bold">Inicia sesión</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
