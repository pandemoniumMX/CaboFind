<?php
include'conexion.php';
include'consultas.php';
// navbar

$id_neg = $_GET['id'];

$postneg = "SELECT *
FROM negocios WHERE ID_NEGOCIO = $id_neg";
$ejecpostn = mysqli_query($conn, $postneg);
while($fila=mysqli_fetch_array($ejecpostn)){
$dir           = $fila['NEG_DIRECCION'];
$tel        = $fila['NEG_TEL'];
$cor       = $fila['NEG_CORREO'];
$map         = $fila['NEG_MAP'];
$detalle         = $fila['NEG_DESCRIPCION'];
$n_nom         = $fila['NEG_NOMBRE'];

}


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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
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
                        <a class="navbar-brand" href="index.php">CaboFind<img src="assets\img/logo.png" height="50px" width="50px"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Descubre</a>
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
  <!-- Hero start -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <?php
            $portada = "SELECT * FROM GALERIA where GAL_TIPO = 'Portada' AND ID_NEGOCIO = $id_neg";
            $query = mysqli_query($conn, $portada);
            while($fila=mysqli_fetch_array($query)){
              $porta           = $fila['GAL_FOTO'];
              echo "<div class='single-hero-slide bg-img background-overlay' style='background-image: url($porta);'></div>
              ";
            }
             ?>
</div>

</div>
    <!-- ***** Header Area End ***** -->



    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">

                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-15">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->

                                        <div class="world-catagory-area">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="title"><?php echo $n_nom ?></li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Información</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Características</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Ubicación</a>
                                                </li>

                                            </ul>

                                            <div class="tab-content" id="myTabContent">

                                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                              <?php
                                                              $post = "SELECT * FROM GALERIA WHERE ID_NEGOCIO = $id_neg
                                                              AND GAL_TIPO = 'Galeria'";
                                                              $ejec2 = mysqli_query($conn, $post);
                                                              while($fila=mysqli_fetch_array($ejec2)){
                                                              $img         = $fila['GAL_FOTO'];

                                                              echo "
                                                              <div class='single-blog-post'>
                                                                  <div class='post-thumbnail'>
                                                                      <img src='$img'>
                                                                      <div class='post-cta'><a href='#'>Galeria</a></div>
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
                                                              echo "
                                                              <div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
                                                                  <div class='post-content'>
                                                                  <p>$detalle</p>
                                                              </div>
                                                              </div>
                                                              ";
                                                              ?>

                                                    </div>
                                                </div>
                                                </div>


                                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">

                                                      <div class="row">
                                                          <div class="col-12 col-md-6">
                                                            <div class="single-blog-post">

                                                                <div class='single-blog-post'>
                                                                    <div class='post-thumbnail'>
                                                                        <img src='assets/img/happy.jpg'>
                                                                    </div>
                                                            </div>
                                                              </div>
                                                              </div>
                                                              <!-- TERMINA SLIDER -->

                                                              <div class="col-12 col-md-6">
                                                                <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>
                                                                    <div class='post-content'>
                                                                <?php
                                                                $post2 = "SELECT * FROM Caracteristicas
                                                                WHERE negocios_ID_NEGOCIO = $id_neg";
                                                                $ejec3 = mysqli_query($conn, $post2);
                                                                while($fila=mysqli_fetch_array($ejec3)){
                                                                $n_nom           = $fila['CAR_NOMBRE'];
                                                                    echo "
                                                                    <p>&#07; $n_nom</p>
                                                                    ";
                                                                  }
                                                                    ?>
                                                                    <div class='post-meta'>
                                                                        <p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>Sep 29, 2017 at 9:48 am</a></p>
                                                                    </div>
                                                                </div>
                                                                </div>


                                                      </div>
                                                  </div>
                                                </div>

                                                <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">

                                                      <div class="row">
                                                        <div class="col-12 col-md-6">
                                                          <div class="single-blog-post">

                                                              <div class='single-blog-post'>
                                                                  <div class='post-thumbnail'>
                                                                      <iframe src="<?php echo $map ?>"
                                                                        width="540" height="307" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                                  </div>
                                                          </div>

                                                            </div>
                                                              </div>
                                                              <!-- TERMINA SLIDER -->

                                                              <div class="col-12 col-md-6">
                                                                <?php

                                                                echo "
                                                                <div class='single-blog-post post-style-2 d-flex align-items-center' data-wow-delay='0.2s'>

                                                                    <div class='post-content'>
                                                                        <h5>Dirección: $dir</h5>
                                                                        <h5>Teléfono: $tel</h5>
                                                                        <h5>Correo: $cor</h5>
                                                                </div>
                                                                </div>
                                                                ";

                                                                ?>

                                                      </div>
                                                  </div>
                                                </div>
                                                <!-- fin de tab3 -->

                                        </div>
                                      </div>
                                      </div>
                                      </div>
                                        <!-- end category area -->
                                    <div class="world-latest-articles">
                                        <div class="row">
                                            <div class="col-12 col-lg-8">
                                                <div class="title">
                                                    <h5>últimas publicaciones</h5>
                                                </div>

                                                <?php
                                                $post2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
                                                FROM publicacion p, galeria g, negocios n
                                                WHERE n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
                                                AND g.ID_GALERIA = p.galeria_ID_GALERIA
                                                AND n.ID_NEGOCIO = $id_neg
                                                LIMIT 4";
                                                $ejec3 = mysqli_query($conn, $post2);
                                                while($fila=mysqli_fetch_array($ejec3)){
                                                $n_nom           = $fila['NEG_NOMBRE'];
                                                $titulo        = $fila['PUB_TITULO'];
                                                $detalle       = $fila['PUB_DETALLE'];
                                                $img         = $fila['GAL_FOTO'];
                                                $fecha         = $fila['PUB_FECHA'];
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
                                                    <p><a href='#' class='post-author'>$n_nom</a> on <a href='#' class='post-date'>$fecha</a></p>
                                                </div>
                                            </div>
                                        </div>
                                                ";
                                              } ?>
                                              <!-- Load More btn -->
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="load-more-btn mt-50 text-center">
                                                          <a href="#" class="btn world-btn">Load More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="600" data-numposts="5"></div>
                                            </div>


                                            <!-- contenido lateral derecha -->
                                            <div class="col-12 col-md-8 col-lg-4">
                                                                <div class="post-sidebar-area mb-100">

                                                                    <!-- Widget Area -->
                                                                    <div class="sidebar-widget-area">
                                                                        <h5 class="title">Top Stories</h5>
                                                                        <div class="widget-content">
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b11.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content">
                                                                                    <a href="#" class="headline">
                                                                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b13.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content">
                                                                                    <a href="#" class="headline">
                                                                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b14.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content">
                                                                                    <a href="#" class="headline">
                                                                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b10.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content">
                                                                                    <a href="#" class="headline">
                                                                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b12.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content">
                                                                                    <a href="#" class="headline">
                                                                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Widget Area -->
                                                                    <div class="sidebar-widget-area">
                                                                        <h5 class="title">Stay Connected</h5>
                                                                        <div class="widget-content">
                                                                            <div class="social-area d-flex justify-content-between">
                                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                                                <a href="#"><i class="fa fa-google"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Widget Area -->
                                                                    <div class="sidebar-widget-area">
                                                                        <h5 class="title">Today’s Pick</h5>
                                                                        <div class="widget-content">
                                                                            <!-- Single Blog Post -->
                                                                            <div class="single-blog-post todays-pick">
                                                                                <!-- Post Thumbnail -->
                                                                                <div class="post-thumbnail">
                                                                                    <img src="img/blog-img/b22.jpg" alt="">
                                                                                </div>
                                                                                <!-- Post Content -->
                                                                                <div class="post-content px-0 pb-0">
                                                                                    <a href="#" class="headline">
                                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- contenido lateral derecha -->

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
                                                <h4 style="color:#FFFF;font-style: italic;";>CABOFIND</h4>
                                                <h5 style="color:#FFFF;";>Siguenos en:</h5>
                                                <a href="https://www.facebook.com/CaboFind" target="_blank"><img src="assets/img/fb.png" style="height: 40px; width: 40px;"></a>
                                                <a href="https://www.youtube.com/CaboFind" target="_blank"><img src="assets/img/inst.png" style="height: 40px; width: 40px;"></a>
                                                <a href="https://www.instagram.com/CaboFind" target="_blank"><img src="assets/img/tw.png" style="height: 40px; width: 40px;"></a>
                                                <a href="https://www.twitter.com/CaboFind" target="_blank"><img src="assets/img/yt.png" style="height: 40px; width: 40px;"></a>
                                                <div class="copywrite-text mt-30">
                                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <p>Proudly distributed by CABOFIND</p>
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
                                                <h5>Suscríbete</h5>
                                                <form action="#" method="post">
                                                    <input type="email" name="email" id="email" placeholder="Ingresa tu correo electronico">
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
