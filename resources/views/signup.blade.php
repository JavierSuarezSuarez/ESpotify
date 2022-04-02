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

        <div class="jumbotron">
            <div class="container">
                <img class="signup_logo" src="images/logo.jpg">
                <div class="box">
                    <input type="text" placeholder="NOMBRE">
                    <input type="text" placeholder="APELLIDOS">
                    <input type="email" placeholder="EMAIL">
                    <input type="password" placeholder="CONTRASEÑA">
                    <input type="password" placeholder="REPETIR CONTRASEÑA">
                    <button class="btn btn-default full-width">UNIRSE A ESPOTIFY</button>
                    <h6 class="already_account_text">¿YA TIENES UNA CUENTA?</h6>
                    <button onclick="window.location='{{ url("login") }}'" class="btn btn-default full-width">INICIAR SESIÓN</button>
                </div>
            </div>
        </div>

        <footer>

        </footer>

    </body>

</html>
