@extends('layouts.app')

@section('content')

<!-- Start Login Area -->
<section class="login-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="login-content">
                    <div class="section-title">
                        <h2><span class="dot"></span> Iniciar Sesión</h2>
                    </div>

                    <form class="login-form" method="POST" action="{{route('login')}}">

                        @csrf

                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo electrónico" id="name" name="email" value="{{ old('email') }}" required>

                            @error('email')
                                <span style="color: red;">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>

                            @error('password')
                                <span style="color: red;">{{$message}}</span>
                            @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

                        <a href="#" class="forgot-password">Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="new-customer-content">
                    <div class="section-title">
                        <h2><span class="dot"></span> Nuevo Usuario</h2>
                    </div>

                    <span>Crear una cuenta</span>
                    <p>
                        Regístrese para obtener una cuenta gratuita en nuestra tienda. Registrarse es facil y rapido. Le permite poder realizar pedidos en nuestra tienda. Para comenzar a comprar, haga clic en registrarse.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-light">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
