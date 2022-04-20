<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/signup_style.css') }}">
        <title>Registrarse</title>
    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="signup-container">
            <img class="signup_logo" src="images/logo.jpg">
            <form method="POST" action="/signup" class="signup-form">
                @csrf
                <input name="nombre" type="text" placeholder="NOMBRE">
                <input name="apellidos" type="text" placeholder="APELLIDOS">
                <input name="email" type="email" placeholder="EMAIL">
                <input name="password" type="password" placeholder="CONTRASEÑA">
                <input name="password_confirmation" type="password" placeholder="REPETIR CONTRASEÑA">
                <input name="tipo" type="hidden" value="2">
                <input name="foto" type="hidden" value="images/profile.png">
                <input type="submit" class="btn btn-default full-width" value="UNIRSE A ESPOTIFY">
            </form>
            <div class="already_account_div">
                <h6 class="already_account_text text-light">¿YA TIENES UNA CUENTA?</h6>
                <button onclick="window.location='{{ url("login") }}'" class="btn btn-default full-width">INICIAR SESIÓN</button>
            </div>
        </div>
    </body>
</html>



