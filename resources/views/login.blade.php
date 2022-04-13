<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--<script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/request_functions.js"></script>-->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/request_functions.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
        <title>Iniciar sesión</title>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container">
                <img class="login_logo" src="images/logo.jpg">
                <div class="box">
                    <input id="email_field" type="text" placeholder="EMAIL">
                    <input id="password_field" type="password" placeholder="CONTRASEÑA">
                    <button class="btn btn-default full-width" onclick="loginRequest()">INICIAR SESIÓN</button>
                </div>
            </div>
        </div>

        <footer>

        </footer>
    </body>

</html>
