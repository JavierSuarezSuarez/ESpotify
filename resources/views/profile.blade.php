<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/profile_style.css') }}">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <title>Perfil</title>
    </head>
    <body>

        <header>
        <div class="container-fluid p-0 w-100">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                        <img src="{{ asset('images/logo.jpg') }}" class="img-fluid float-start" width="80" alt="logoEspotify" />
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="uil uil-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Canciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Playlists</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

        <section class="profile_section">

            <div class="user_img_div">
                <img src="{{ asset('images/profile.png') }}" class="user_img"  alt="user_image" /> <br>
                <h3 class="user_full_name">Pepe Moreno Pérez</h3>
                <h4 class="playlist_text">Playlists: </h4>
                <p class="user_playlists">6</p> <br>
                <div class="button_div">
                    <button class="btn btn-default full-width">Editar Perfil</button>
                </div>
            </div>

            <div class="user_data_div">
                <h6 class="header_name">NOMBRE</h6>
                <p class="user_name">Pepe</p>
                <h6 class="header_surname">APELLIDOS</h6>
                <p class="user_surname">Moreno Pérez</p>
                <h6 class="header_email">EMAIL</h6>
                <p class="user_email">pepe2301@gmail.com</p>
                <h6 class="header_password">CONTRASEÑA</h6>
                <p class="user_password">...........</p>
            </div>

        </section>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <footer class="site-footer bg-dark">
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
    </footer>

    </body>

</html>
