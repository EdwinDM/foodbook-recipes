<?php
    require 'db.php';

    //all recipes
    $recipes = $database->select("tb_recipes","*",[
        'LIMIT' => 15
    ]);

    $top_ten = $database->select("tb_recipes","*",[
        'LIMIT' => 10
    ]);

    $new_recipe = $database->select("tb_recipes","*",[
        'LIMIT' => 1
    ]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina Principal</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Jquery -->
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!-- BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
        onerror="this.onerror=null;this.href='./css/vendors/bootstrap.min.css';" />
    <!-- Normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="bg-index">
        <header class="header-base">

            <!-- mobile bar menu -->

            <div class="position-absolute  top-0 start-0 pt-3 pb-3 ps-3 mobile-bar  ">
                <div class="row ">
                    <div class="col d-flex ">
                        <img class="mobile-icon" src="./imgs/bars.svg" alt="menu bar">
                    </div>

                    <div class="col d-flex ">
                        <img class="mobile-logo " src="./imgs/Logo.png" alt="menu bar">
                    </div>

                    <div class="col d-flex justify-content-center">

                        <img src="./imgs/profile-image.jpg" class="profile-index2 " alt="Profile" role="button">

                    </div>
                </div>
            </div>

            <!-- mobile bar menu -->


            <!-- nav menu -->
            <nav id="navbar-main" class="mobile-offcanvas navbar  navbar-expand-lg topnav">
                <div class="offcanvas-header">
                    <button id="btn-close" class="btn btn-light float-end me-3">X</button>
                </div>
                <div class="container container-nav center gap-3 ">
                    <a class="navbar-brand d-flex align-items-center me-5" href="#">
                        <img src="./imgs/Logo.png" class="header-logo" alt="Logo">
                    </a>
                    <div class=" container container-nav" id="navbarSupportedContent">
                        <ul class="navbar-nav gap-5  ">
                            <li class="nav-item  position-relative dropdown"><a class="nav-link b title-md0"
                                    aria-current="page" href="#">Principal</a></li>
                            <li class="dropdown nav-item ">
                                <a class="nav-link title-md0" data-bs-toggle="dropdown" aria-expanded="false"
                                    href="#">Categoría </a>
                                <a href=" "></a>
                                <ul class="dropdown-menu text-center">
                                    <li><a href="#" class="dropdown-item">Entradas</a></li>
                                    <li><a class="dropdown-item" href="#">Desayunos</a></li>
                                    <li><a class="dropdown-item" href="#">Almuerzos</a></li>
                                    <li><a class="dropdown-item" href="#">Sopas</a></li>
                                    <li><a class="dropdown-item" href="#">Postres</a></li>
                                    <li><a class="dropdown-item" href="#">Bebidas</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class=" nav-link  title-md0 " data-bs-toggle="dropdown" aria-expanded="false"
                                    href="#">
                                    Dificultad
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li><a class="dropdown-item" href="#">Fácil</a></li>
                                    <li><a class="dropdown-item" href="#">Intermedio</a></li>
                                    <li><a class="dropdown-item" href="#">Difícil</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class=" nav-link  title-md0  " data-bs-toggle="dropdown" aria-expanded="false"
                                    href="#">
                                    Ocasiones
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li><a class="dropdown-item" href="#">Todas</a></li>
                                    <li><a class="dropdown-item" href="#">Cumpleaños</a></li>
                                    <li><a class="dropdown-item" href="#">Día del padre</a></li>
                                    <li><a class="dropdown-item" href="#">Día del madre</a></li>
                                    <li><a class="dropdown-item" href="#">Día del niño</a></li>
                                    <li><a class="dropdown-item" href="#">Navidad</a></li>
                                    <li><a class="dropdown-item" href="#">semana Santa</a></li>
                                    <li><a class="dropdown-item" href="#">Verano</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <input class="search-input " type="search" placeholder="¿Qué quieres cocinar hoy?">

                    <div class="col">
                        <div class="container container-nav  ">
                            <div class="dropdown">
                                <img src="./imgs/profile-image.jpg" class="profile-index hidden-form" alt="Profile"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu text-center p-4">
                                    <li><a class="title-sm2 profile-text">EdwinDM</a><br><a class="title-sm2 profile-text2">edwindm2003@gmail.com</a></li>
                                    <li><a class="dropdown-item pt-3" href="#">Cerrar sesión</a></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- nav menu -->

        </header>


        <!-- Poster -->

        <section class="nav-poster ">

            <div class="mb-5 text-center">
                <div class="wrapper d-flex justify-content-center mt-5">
                    <div class="words text-center">
                        <span class="title-xlgsb">Entradas</span>
                        <span class="title-xlgsb">Desayunos</span>
                        <span class="title-xlgsb">Almuerzos</span>
                        <span class="title-xlgsb">Sopas</span>
                        <span class="title-xlgsb">Bebidas</span>
                    </div>
                </div>
                <h1 class="title-xlgsb text-white text-center m-0"> ¡Lo tenemos!</h1>
                    <h2 class="tittle-mdxl1 text-share text-center">Comparte con tus amigos las mejores recetas</h2>
                    <button type="button" class=" css-button-sliding-to-left--green text-center mt-4" >Compartir</button>
            </div>

        </section>

        <!-- Poster -->
        
        <section class="nav-ten">
            <div class="container-ld">
                <div>
                    <div class=" d-flex justify-content-between align-items-end title-subidos-container">
                        <h2 class="title-options  ms-4">Top 10 recetas</h2>
                        <h3 class="ver-mas me-4">Ver más</h3>
                    </div>
                    <div class="row row-1">
                        <?php
                            foreach ($top_ten as $recipe){
                                echo "<div class='col recipe-card-1'>
                                    <a href='#'>
                                        <div class='card-bg'>
                                            <img class='card-image' src='./imgs/recipe/".$recipe["recipe_image"]."'alt='".$recipe["recipe_name"]."'/>
                                            <div class='card-data'>
                                                <div class='card-info'>
                                                    <div class='card-text'>
                                                        <h2 class='card-title'>".$recipe["recipe_name"]."</h2>
                                                        <h3 class='card-time'>".$recipe["recipe_time"]."</h3>
                                                    </div>
                                                    <div class='card-likes'><i class='fa-solid fa-heart hearth'></i>
                                                        <h2 class='like-count'>".$recipe["recipe_likes"]."</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- 10 vot -->

        <!-- 2Poster -->

        <section class="nav-poster2">

            <div class="text-center">
                <h2 class="title-lg mb-5">¡Lo más nuevo!</h2>





                <?php
                    foreach ($new_recipe as $recipe){
                        echo "<div class='poster-bg'>
                                <img class='img-poster' src='./imgs/recipe/".$recipe["recipe_image"]."'alt='".$recipe["recipe_name"]."'>
                                <div class='poster-data '>
                                    <div class='poster-info '>
                                        <div class='poster-text'>
                                            <h2 class='poster-title'>".$recipe["recipe_name"]."</h2>
                                            <p class='poster-description mt-3'>Inserte la descripción de la receta aquí</p>
                                            <p class='poster-time justify-content-start'>".$recipe["recipe_time"]."</p>
                                            <div class='poster-labels'>
                                                <a class='lbl2 lunch1 ' href='#'>Almuerzo</a>
                                                <a class='lbl2 dinner1' href='#'>Cena</a>
                                                <a class='lbl intermediate' href='#'>Intermedio</a>
                                            </div>
                                            <button href='#' type='button'
                                                class=' css-button-sliding-to-left--green text-center mt-5 '>Ver receta</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                ?>






            </div>

        </section>


        <!-- Rectario -->


        <section class="nav-ten2 container-nav">
            <div class="container-ld d-flex justify-content-center align-items-center">
                <div>
                    <div class="d-flex justify-content-between align-items-end title-subidos-container">
                        <h2 class="title-options ms-4">Nuestras recetas</h2>
                        <h3 class="ver-mas me-4">Ver más</h3>
                    </div>

                    <div class="row row-1">
                        <?php
                            foreach ($recipes as $recipe){
                                echo "<div class='col recipe-card-1'>
                                    <a href='#'>
                                        <div class='card-bg'>
                                            <img class='card-image' src='./imgs/recipe/".$recipe["recipe_image"]."'alt='".$recipe["recipe_name"]."'/>
                                            <div class='card-data'>
                                                <div class='card-info'>
                                                    <div class='card-text'>
                                                        <h2 class='card-title'>".$recipe["recipe_name"]."</h2>
                                                        <h3 class='card-time'>".$recipe["recipe_time"]."</h3>
                                                    </div>
                                                    <div class='card-likes'><i class='fa-solid fa-heart hearth'></i>
                                                        <h2 class='like-count'>".$recipe["recipe_likes"]."</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>



        <footer class=" downnav  ">
            <section class="container d-flex mobile-footer  gap-5 ">

                <div class="col-md  ">

                    <a class="navbar-brand d-flex just mt-3 footer-img " href="#">
                        <img src="./imgs/Logo.png" class="footer-image " alt="Logo" class="">

                    </a>

                </div>

                <div class="col-md mt-3 footer-img  ">
                    <div class="row   site ">
                        <div class="col ">
                            <ul class=" mobile-footer">
                                <li class="mb-3 footer-item">
                                    <h2 class="footer-link title-md1 container-nav" href="#">CONTACTO</h2>
                                </li>
                                <li class="mb-3 footer-item"><a class="footer-link " href="#">+506 2447
                                        5635</a></li>
                                <li class="mb-3 footer-item"><a class="footer-link  "
                                        href="#">foodbook@example.co.cr</a>
                                </li>
                                <li class="mb-3 footer-item"><a class="footer-link  " href="#">San Jose,
                                        Costa Rica. Av 11</a></li>
                            </ul>


                        </div>

                        <div class="col ">
                            <ul class="mobile-footer p-0">
                                <li class="mb-3 footer-item">
                                    <h2 class="footer-link title-md1 container-nav" href="#">MAPA DEL SITIO</h2>
                                </li>
                                <li class="mb-3 footer-item"><a class="footer-link " href="#">CATEGORIA</a>
                                </li>
                                <li class="mb-3 footer-item"><a class="footer-link  " href="#">DIFICULTAD</a>
                                </li>
                                <li class="mb-3 footer-item"><a class="footer-link  " href="#">OCASIONES</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
            </section>

            <section class="container ">
                <p class=" border-line mt-3 text-center pe-3"> </p>

            </section>



            <section class="container container-creditos creditos ">


                <div class="col-md d-flex   justify-content-center">
                    <p class=" footer-text  mt-4 ">2022 Foodbok. Todos los derechos reservados.
                    </p>
                </div>



                <div class="col-md d-flex align-items-center  justify-content-center ">

                    <ul class="d-flex p-0 mt-4 gap-3">
                        <li class="d-inline-block"><a href="#"> <img class="footer-media" src="./imgs/tw.png"
                                    alt="twitter"></a></li>
                        <li class="d-inline-block"><a href="#"><img class="footer-media" src="./imgs/fb.png"
                                    alt="twitter"></a></li>
                        <li class="d-inline-block"><a href="#"> <img class="footer-media" src="./imgs/ig.png"
                                    alt="twitter"></a></li>
                    </ul>

                </div>

                <div class="col-md d-flex align-items-center  justify-content-center pr">

                    <ul class="d-flex p-0 mt-4 gap-5">
                        <li class="footer-text d-inline-block ">
                            <p class=" "></p> Terminos de uso.</p>
                        </li>
                        <li class="footer-text d-inline-block">
                            <p class="  "></p> Politicas de privacidad.</p>
                        </li>

                    </ul>

                </div>


            </section>

        </footer>
    </section>





    <script src="../js/admin-options.js"></script>
    <script src="../js/upload-input.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('.mobile-icon').addEventListener('click', function (event) {
                console.log('click');
                document.getElementById('navbar-main').classList.add('show-nav');
            });

            document.querySelector('#btn-close').addEventListener('click', function (event) {
                document.getElementById('navbar-main').classList.remove('show-nav');
            });
        });
    </script>
</body>

</html>