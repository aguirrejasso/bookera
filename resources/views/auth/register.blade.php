@extends('layouts.app')

@section('content')

<!-- Start SignUP Area -->
<section class="signup-area ptb-60">
    <div class="container">
        <div class="signup-content">
            <div class="section-title">
                <h2><span class="dot"></span> Crear una cuenta</h2>
            </div>

            <form class="signup-form" method="POST" action="{{ route('register') }}">

                @csrf

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="fname" name="name" value="{{ old('name') }}">

                    @error('name')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Correo electrónico</label>
                    <input type="email" class="form-control" id="name" name="email" value="{{ old('email') }}">

                    @error('email')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">

                    @error('password')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input type="password" class="form-control" id="password" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Registrarse</button>

                <a href="{{ route('home') }}" class="return-store">Regresar a la tienda</a>
            </form>
        </div>
    </div>
</section>
<!-- End SignUP Area -->

@endsection
