<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
        <title>Iniciar sesión</title>
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


        <div class="login-container d-flex flex-column align-items-center">
            <a href="/"><img class="login_logo" src="images/logo.jpg" alt="login-logo"></a>
            <form class="login-form d-flex flex-column align-items-center" method="POST" action="/login">
                @csrf
                <input name="email" id="email" type="text" placeholder="EMAIL">
                <input name="password" id="password" type="password" placeholder="CONTRASEÑA">
                <input type="submit" class="loginbtn btn btn-default full-width" value="INICIAR SESIÓN">
            </form>
        </div>

    </body>

</html>
