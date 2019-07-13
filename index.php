<?php
include'conexion.php';
// navbar
include'consultas.php';

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
                                <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Descubre</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <!-- descubre -->
                                  <?php
                                  while($fila=mysqli_fetch_array($ejec_desc)){
                                  $id_sub           = $fila['ID_SUBCATEGORIA'];
                                  $nom_sub       = $fila['SUB_NOMBRE'];
                                  echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                  }
                                  ?>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vida nocturna</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                  <!-- Vida nocturna -->
                                  <?php
                                  while($fila=mysqli_fetch_array($ejec_vidn)){
                                  $id_sub           = $fila['ID_SUBCATEGORIA'];
                                  $nom_sub       = $fila['SUB_NOMBRE'];
                                  echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                  }
                                  ?>

                                </div>
                            </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurantes</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <!-- restaurantes -->
                                    <?php
                                    while($fila=mysqli_fetch_array($ejec_rest)){
                                    $id_sub           = $fila['ID_SUBCATEGORIA'];
                                    $nom_sub       = $fila['SUB_NOMBRE'];
                                    echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                    }
                                    ?>
                                  </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compras</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <!-- Compras -->
                                    <?php
                                    while($fila=mysqli_fetch_array($ejec_comp)){
                                    $id_sub           = $fila['ID_SUBCATEGORIA'];
                                    $nom_sub       = $fila['SUB_NOMBRE'];
                                    echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                    }
                                    ?>
                                  </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- servicios -->
                                    <?php
                                    while($fila=mysqli_fetch_array($ejec_serv)){
                                    $id_sub           = $fila['ID_SUBCATEGORIA'];
                                    $nom_sub       = $fila['SUB_NOMBRE'];
                                    echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                    }
                                    ?>
                                  </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salud</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- salud -->
                                    <?php
                                    while($fila=mysqli_fetch_array($ejec_salu)){
                                    $id_sub           = $fila['ID_SUBCATEGORIA'];
                                    $nom_sub       = $fila['SUB_NOMBRE'];
                                    echo "<a class='dropdown-item' href='categorias.php?id=$id_sub'>$nom_sub</a>";
                                    }
                                    ?>
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class='carousel-indicators'>
  <li data-target='#carouselExampleIndicators' data-slide-to='0'></li>
  <li data-target='#carouselExampleIndicators' data-slide-to='1' ></li>
  <li data-target='#carouselExampleIndicators' data-slide-to='2' ></li>
  <li data-target='#carouselExampleIndicators' data-slide-to='3' ></li>
  <li data-target='#carouselExampleIndicators' data-slide-to='4' ></li>
    </ol>
    <div class='carousel-inner'>
      <div class='carousel-item active align-items-center'>
        <img style="width:1200px; height:450px;" src='assets/galeria/140929.jpg' alt='$titulo'>

      </div>
    <?php

    $ejec = mysqli_query($conn, $slide);
    while($fila=mysqli_fetch_array($ejec)){
    $row           = $fila['row'];
    $titulo        = $fila['PUB_TITULO'];
    $img           = $fila['GAL_FOTO'];

    echo "
        <div class='carousel-item align-items-center'>
          <img style='width:1200px; height:450px;' src='$img' alt='$titulo'>
          <div class='carousel-caption'>
          <div class='card'>
    <h3>$titulo</h3>
    <p>We had such a great time in LA!</p>
    </div>
    </div>
        </div>
        ";
    }
    ?>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



                      <!--
                        <div class="hero-post-slide">
                            <!-- Single Slide

                              <?php
                            /*
                              $ejec = mysqli_query($conn, $slide);
                              while($fila=mysqli_fetch_array($ejec)){
                              $row           = $fila['row'];
                              $titulo        = $fila['PUB_TITULO'];
                              $img           = $fila['GAL_FOTO'];

                              echo "
                              <div class='single-slide d-flex align-items-center'>
                              <div class='post-thumbnail'>
                              <img src='$img' style='width: 800px; height: 400px;'>
                              <div class='post-number'>
                              <p>$row</p>
                              </div>
                              <div class='post-title'>
                              <a href='#'>$titulo</a>
                              </div>
                              </div>
                              </div>";
                            }*/
                              ?>
                        </div>
                      -->
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

                                      $ejec2 = mysqli_query($conn, $post);
                                      while($fila=mysqli_fetch_array($ejec2)){
                                      $n_nom           = $fila['NEG_NOMBRE'];
                                      $titulo        = $fila['PUB_TITULO'];
                                      $detalle       = $fila['PUB_DETALLE'];
                                      $img         = $fila['GAL_FOTO'];
                                      $id         = $fila['ID_NEGOCIO'];
                                      echo "
                                      <div class='single-blog-post'>
                                          <div class='post-thumbnail'>
                                              <img src='$img'>
                                              <div class='post-cta'><a href='negocio.php?id=$id'>$n_nom</a></div>
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

                                      $ejec3 = mysqli_query($conn, $post2);
                                      while($fila=mysqli_fetch_array($ejec3)){
                                      $n_nom           = $fila['NEG_NOMBRE'];
                                      $titulo        = $fila['PUB_TITULO'];
                                      $detalle       = $fila['PUB_DETALLE'];
                                      $img         = $fila['GAL_FOTO'];
                                      $id         = $fila['ID_NEGOCIO'];

                                      echo "
                                      <div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
                                          <div class='post-thumbnail'>
                                              <img src='$img'>

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
                                    <div class="single-blog-post">
                                        <?php
                                        $post3 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                        FROM publicacion p, galeria g, negocios n
                                        WHERE g.GAL_TIPO = 'Publicacion'
                                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                      LIMIT 1;";
                                        $ejec2 = mysqli_query($conn, $post3);
                                        while($fila=mysqli_fetch_array($ejec2)){
                                        $n_nom           = $fila['NEG_NOMBRE'];
                                        $titulo        = $fila['PUB_TITULO'];
                                        $detalle       = $fila['PUB_DETALLE'];
                                        $img         = $fila['GAL_FOTO'];

                                        echo "
                                        <div class='single-blog-post'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>

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
                                        WHERE g.GAL_TIPO = 'Publicacion'
                                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                        LIMIT 4";
                                        $ejec3 = mysqli_query($conn, $post2);
                                        while($fila=mysqli_fetch_array($ejec3)){
                                        $n_nom           = $fila['NEG_NOMBRE'];
                                        $titulo        = $fila['PUB_TITULO'];
                                        $detalle       = $fila['PUB_DETALLE'];
                                        $img         = $fila['GAL_FOTO'];

                                        echo "
                                        <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>

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

                        <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">

                              <div class="row">
                                <div class="col-12 col-md-6">
                                  <div class="single-blog-post">
                                      <?php
                                      $post = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                      FROM publicacion p, galeria g, negocios n
                                      WHERE g.GAL_TIPO = 'Publicacion'
                                      AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                     LIMIT 1;";
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
                                        WHERE g.GAL_TIPO = 'Publicacion'
                                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                        LIMIT 4";
                                        $ejec3 = mysqli_query($conn, $post2);
                                        while($fila=mysqli_fetch_array($ejec3)){
                                        $n_nom           = $fila['NEG_NOMBRE'];
                                        $titulo        = $fila['PUB_TITULO'];
                                        $detalle       = $fila['PUB_DETALLE'];
                                        $img         = $fila['GAL_FOTO'];

                                        echo "
                                        <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>

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

                        <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">

                              <div class="row">
                                <div class="col-12 col-md-6">
                                  <div class="single-blog-post">
                                      <?php
                                      $post = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                      FROM publicacion p, galeria g, negocios n
                                      WHERE g.GAL_TIPO = 'Publicacion'
                                      AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                       LIMIT 1;";
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
                                        WHERE g.GAL_TIPO = 'Publicacion'
                                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                        LIMIT 4";
                                        $ejec3 = mysqli_query($conn, $post2);
                                        while($fila=mysqli_fetch_array($ejec3)){
                                        $n_nom           = $fila['NEG_NOMBRE'];
                                        $titulo        = $fila['PUB_TITULO'];
                                        $detalle       = $fila['PUB_DETALLE'];
                                        $img         = $fila['GAL_FOTO'];

                                        echo "
                                        <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>

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

                        <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                              <div class="row">
                                <div class="col-12 col-md-6">
                                  <div class="single-blog-post">
                                      <?php
                                      $post = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                                      FROM publicacion p, galeria g, negocios n
                                      WHERE g.GAL_TIPO = 'Publicacion'
                                      AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                       LIMIT 1;";
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
                                        WHERE g.GAL_TIPO = 'Publicacion'
                                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                        LIMIT 4";
                                        $ejec3 = mysqli_query($conn, $post2);
                                        while($fila=mysqli_fetch_array($ejec3)){
                                        $n_nom           = $fila['NEG_NOMBRE'];
                                        $titulo        = $fila['PUB_TITULO'];
                                        $detalle       = $fila['PUB_DETALLE'];
                                        $img         = $fila['GAL_FOTO'];

                                        echo "
                                        <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>

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

                        <?php
                        $post2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
                        FROM publicacion p, galeria g, negocios n
                        WHERE g.GAL_TIPO = 'Publicacion'
                        AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                        LIMIT 4";
                        $ejec3 = mysqli_query($conn, $post2);
                        while($fila=mysqli_fetch_array($ejec3)){
                        $n_nom           = $fila['NEG_NOMBRE'];
                        $titulo        = $fila['PUB_TITULO'];
                        $detalle       = $fila['PUB_DETALLE'];
                        $img         = $fila['GAL_FOTO'];
                        echo "
                        <div class='single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.3s'>
                        <div class='post-thumbnail'>
                            <img src='$img'>
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
                      } ?>
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
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">¿Qué hacer?</a></li>
                            <li><a href="#">Restaurantes</a></li>
                            <li><a href="#">Bares</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Comercios</a></li>
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
