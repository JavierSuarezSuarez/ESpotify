<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/signup_style.css') }}">

        <!--==================== UNICONS ====================--
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->

        <title>Registrarse</title>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container">
                <img class="signup_logo" src="images/logo.jpg">
                <form class="box" method="POST" action="/signup">
                    @csrf
                    <input name="nombre" type="text" placeholder="NOMBRE">
                    <input name="apellidos" type="text" placeholder="APELLIDOS">
                    <input name="email" type="email" placeholder="EMAIL">
                    <input name="password" type="password" placeholder="CONTRASEÑA">
                    <!--<input type="password" placeholder="REPETIR CONTRASEÑA">-->
                    <input name="tipo" type="hidden" value="2">
                    <input name="foto" type="hidden" value="images/profile.png">
                    <input type="submit" class="btn btn-default full-width" value="UNIRSE A ESPOTIFY">
                </form>


                <!--<div class="box">
                    <input type="text" placeholder="NOMBRE">
                    <input type="text" placeholder="APELLIDOS">
                    <input type="email" placeholder="EMAIL">
                    <input type="password" placeholder="CONTRASEÑA">
                    <input type="password" placeholder="REPETIR CONTRASEÑA">
                    <button class="btn btn-default full-width">UNIRSE A ESPOTIFY</button>
                    <h6 class="already_account_text">¿YA TIENES UNA CUENTA?</h6>
                    <button onclick="window.location='{{ url("login") }}'" class="btn btn-default full-width">INICIAR SESIÓN</button>
                </div>-->
            </div>
        </div>

    </body>



<!--    <footer class="site-footer bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid text-center align-self-center">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                            <a href="#">Espotify</a>.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </footer> -->

</html>
