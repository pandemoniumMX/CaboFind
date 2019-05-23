<?php
include'conexion.php';
// navbar


//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Cabo Find &amp; Aqui encontrarás lo que buscas</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">


</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">CaboFind<img src="assets\img/logo.png" height="50px" width="50px"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Qué hacer?</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Música</a>
                                    <a class="dropdown-item" href="#">Actividades turisticas</a>
                                    <a class="dropdown-item" href="#">Teatro</a>
                                    <a class="dropdown-item" href="#">Playas</a>
                                    <a class="dropdown-item" href="#">Museos</a>



                                  </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bares</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">NightClub</a>
                                    <a class="dropdown-item" href="#">PUB</a>
                                    <a class="dropdown-item" href="#">SportBar</a>
                                    <a class="dropdown-item" href="#">RockBar</a>
                                    <a class="dropdown-item" href="#">Terraza</a>
                                    <a class="dropdown-item" href="#">Bar Restaurant</a>
                                    <a class="dropdown-item" href="#">Billar</a>


                                  </div>
                              </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurantes</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Mexicano</a>
                                      <a class="dropdown-item" href="#">Italiano</a>
                                      <a class="dropdown-item" href="#">Japones</a>
                                      <a class="dropdown-item" href="#">Chino</a>
                                      <a class="dropdown-item" href="#">Mariscos</a>
                                      <a class="dropdown-item" href="#">Mexicano</a>
                                      <a class="dropdown-item" href="#">Comida rapida</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Medicos</a>
                                      <a class="dropdown-item" href="#">Tecnicos</a>
                                      <a class="dropdown-item" href="#">Mecanicos</a>
                                      <a class="dropdown-item" href="#">Transporte</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comercios</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Ropa</a>
                                      <a class="dropdown-item" href="#">Joyerias</a>
                                      <a class="dropdown-item" href="#">Supermercados</a>
                                      <a class="dropdown-item" href="#">Autopartes</a>
                                      <a class="dropdown-item" href="#">Artesanias</a>

                                    </div>
                                </li>




                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(assets/img/blog-img/bg2.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(assets/img/blog-img/bg1.jpg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->

                              <?php
                              $slide = "SELECT  @row := @row + 1 as row, PUB_TITULO, PUB_DETALLE
                              FROM publicacion a, (SELECT @row := 0) r
                              WHERE exposicion_ID_EXPOSICION = 4 LIMIT 4";
                              $ejec = mysqli_query($conn, $slide);
                              while($fila=mysqli_fetch_array($ejec)){
                              $row           = $fila['row'];
                              $titulo        = $fila['PUB_TITULO'];

                              echo "
                              <div class='single-slide d-flex align-items-center'>
                              <div class='post-number'>
                              <p>$row</p>
                              </div>

                              <div class='post-title'>
                              <a href='#'>$titulo</a>
                              </div>
                              </div>";
                              }
                              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-15">
                    <div class="post-content-area mb-50">

                <!-- Category area -->

                <div class="world-catagory-area">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="title">No te lo puedes perder!</li>

                        <li class="nav-item">
                            <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Todo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Actividades turisticas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Actividades nocturnas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Shopping</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Eventos</a>
                        </li>


                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                      <?php
                                      $post = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                      FROM publicacion p, galeria g, negocios n
                                      WHERE p.ID_PUBLICACION = g.publicacion_ID_PUBLICACION
                                      AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                      AND p.exposicion_ID_EXPOSICION = 5 LIMIT 4;";
                                      $ejec2 = mysqli_query($conn, $post);
                                      while($fila=mysqli_fetch_array($ejec2)){
                                      $n_nom           = $fila['NEG_NOMBRE'];
                                      $titulo        = $fila['PUB_TITULO'];
                                      $detalle       = $fila['PUB_DETALLE'];
                                      $img         = $fila['GAL_FOTO'];

                                      echo "
                                      <div class='single-blog-post'>
                                          <div class='post-thumbnail'>
                                              <img src='$img'>
                                              <div class='post-cta'><a href='#'>$n_nom</a></div>
                                          </div>
                                          <div class='post-content'>
                                              <a href='#' class='headline'>
                                              <h5>$titulo</h5>
                                          </a>
                                          <p>$detalle</p>

                                          <div class='post-meta'>
                                              <p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>Sep 29, 2017 at 9:48 am</a></p>
                                          </div>
                                      </div>
                                  </div>

                                      ";
                                    }
                                      ?>
                                    </div>
                                    </div>
                                    <!-- TERMINA SLIDER -->

                                    <div class="col-12 col-md-6">
                                      <?php
                                      $post2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                      FROM publicacion p, galeria g, negocios n
                                      WHERE p.ID_PUBLICACION = g.publicacion_ID_PUBLICACION
                                      AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                      LIMIT 4";
                                      $ejec3 = mysqli_query($conn, $post2);
                                      while($fila=mysqli_fetch_array($ejec3)){
                                      $n_nom           = $fila['NEG_NOMBRE'];
                                      $titulo        = $fila['PUB_TITULO'];
                                      $detalle       = $fila['PUB_DETALLE'];
                                      $img         = $fila['GAL_FOTO'];

                                      echo "
                                      <div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
                                          <div class='post-thumbnail'>
                                              <img src='$img'>
                                              <div class='post-cta'><a href='#'>$n_nom</a></div>
                                          </div>
                                          <div class='post-content'>
                                              <a href='#' class='headline'>
                                              <h5>$titulo</h5>
                                          </a>
                                          <p>$detalle</p>

                                          <div class='post-meta'>
                                              <p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>Sep 29, 2017 at 9:48 am</a></p>
                                          </div>
                                      </div>
                                      </div>
                                      ";
                                    }
                                      ?>

                            </div>
                        </div>
                        </div>


                        <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-6" role="tabpanel" aria-labelledby="tab6">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-7" role="tabpanel" aria-labelledby="tab7">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-8" role="tabpanel" aria-labelledby="tab8">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-9" role="tabpanel" aria-labelledby="tab9">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b1.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b10.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b11.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b12.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="assets/img/blog-img/b13.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
                <!-- end category area -->
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Latest Articles</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="title">
                            <h5>Most Popular Videos</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b7.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                                <!-- Video Button -->
                                <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="assets/img/blog-img/b8.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                                <!-- Video Button -->
                                <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="assets/img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<p>Proudly distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->
    <script type="text/javascript">

      function login(){


      swal({
      title: 'Iniciar Sesión',
      html:
      '<div class="col-lg-12">  <form class="login-form" action="method_login.php" method="post">'+
          ' <div class="form-group">'+
              '   <label class="control-label">Usuario</label>'+
              '<input name="user" class="form-control" type="text" placeholder="Email" autofocus>'+
              '</div>'+
              '<div class="form-group">'+
                  '<label class="control-label">Contraseña</label>'+
                  '<input name="pass" class="form-control" type="password" placeholder="Password">'+
                  '</div>'+
                  '<div class="form-group">'+
                      '<div class="utility">'+
                          '<div class="animated-checkbox">'+
                              '<label>'+
                                  '<input type="checkbox"><span class="label-text">Mantener la sesión</span>'+
                                  '</label>'+
                                  ' </div>'+
                                  ' <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidó su contraseña ?</a></p>'+

                                  ' </div>'+
                                  ' </div>'+
                                  ' <div class="form-group btn-container">'+
                ' <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Iniciar sesion</button></br>'+
                ' <p class="semibold-text mb-4"><a href="#" data-toggle="flip">Registrarse</a></p>'+

              ' </div>'+
         ' </form>'+
         '</div>',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '</form> Actualizar solicitud',
      cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
      showConfirmButton: false,
      focusConfirm: false,
      buttonsStyling: false,
      reverseButtons: true
      })

      };
      </script>

<script type="text/javascript">

  function registro(){


  swal({
  title: 'Registrarse',
  html:
  '<div class="col-lg-12">  <form class="login-form" action="method_register.php" method="post">'+
      ' <div class="form-group">'+
          '   <label class="control-label">Usuario</label>'+
          '<input name="user" class="form-control" type="text" required placeholder="Nombre de usuario" autofocus>'+
          '</div>'+
          '<div class="form-group">'+
          '<label class="control-label">Correo</label>'+
          '<input name="user" class="form-control" type="mail" required placeholder="Email" autofocus>'+
          '</div>'+
          '<div class="form-group">'+
          '<label class="control-label">Celular</label>'+
          '<input name="user" class="form-control" type="number" required placeholder="Celular" autofocus>'+
          '</div>'+
          '<div class="form-group">'+
          '<label class="control-label">Localidad</label>'+
          '<select class="form-control form-control-sm" textalign="center"  required name="sucu" id="sucu">'+
          '<option value="Cabo San Lucas" >Cabo San Lucas</option>'+
          '<option value="San Jose del Cabo" >San José del Cabo</option>'+
          '<option value="Los Bariles" >Los Barriles</option>'+
          '<option value="Todos Santos" >Todos Santos</option>'+
          '</select>' +

          '</div>'+
          '<div class="form-group">'+
          '<label class="control-label">Contraseña</label>'+
          '<input name="pass" class="form-control" type="password" required placeholder="Password">'+
          '</div>'+

          ' <div class="form-group btn-container">'+
          ' <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Registrarse</button></br>'+

          ' </div>'+
     ' </form>'+
     '</div>',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '</form> Actualizar solicitud',
  cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
  showConfirmButton: false,
  focusConfirm: false,
  buttonsStyling: false,
  reverseButtons: true
  })

  };
  </script>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>


</body>

</html>
