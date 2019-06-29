<?php
include'conexion.php';

$id_subcat = $_GET['id'];
$id_cat = 0;
$subcategoria = "SELECT * FROM subcategoria s, categorias c
                  WHERE c.ID_CATEGORIA = s.ID_CATEGORIA
                  AND s.ID_SUBCATEGORIA = $id_subcat";
$ejecuta = mysqli_query($conn, $subcategoria);
while($fila=mysqli_fetch_array($ejecuta)){
$id_cat           = $fila['ID_CATEGORIA'];
$cat_nom          = $fila['CAT_NOMBRE'];
$subcat_nom       = $fila['SUB_NOMBRE'];
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
    <header class="header-area sticky">
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
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Qué hacer?</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="categorias.php?id=8002">Música</a>
                                    <a class="dropdown-item" href="categorias.php?id=8001">Actividades turisticas</a>
                                    <a class="dropdown-item" href="categorias.php?id=8003">Teatro</a>
                                    <a class="dropdown-item" href="categorias.php?id=8004">Playas</a>
                                    <a class="dropdown-item" href="categorias.php?id=8005">Museos</a>



                                  </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bares</a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="categorias.php?id=8006">NightClub</a>
                                    <a class="dropdown-item" href="categorias.php?id=8008">PUB</a>
                                    <a class="dropdown-item" href="#">SportBar</a>
                                    <a class="dropdown-item" href="#">RockBar</a>
                                    <a class="dropdown-item" href="categorias.php?id=8007">Terraza</a>
                                    <a class="dropdown-item" href="categorias.php?id=8009">Ladysnight</a>
                                    <a class="dropdown-item" href="#">Billar</a>


                                  </div>
                              </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurantes</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="categorias.php?id=8019">Mexicano</a>
                                      <a class="dropdown-item" href="categorias.php?id=8020">Italiano</a>
                                      <a class="dropdown-item" href="categorias.php?id=8021">Japones</a>
                                      <a class="dropdown-item" href="categorias.php?id=8018">Chino</a>
                                      <a class="dropdown-item" href="categorias.php?id=8023">Mariscos</a>
                                      <a class="dropdown-item" href="categorias.php?id=8022">Comida rapida</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="categorias.php?id=8010">Medicos</a>
                                      <a class="dropdown-item" href="categorias.php?id=8011">Tecnicos</a>
                                      <a class="dropdown-item" href="categorias.php?id=8012">Mecanicos</a>
                                      <a class="dropdown-item" href="#">Transporte</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href='' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comercios</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="categorias.php?id=8015">Ropa</a>
                                      <a class="dropdown-item" href="#">Joyerias</a>
                                      <a class="dropdown-item" href="#">Supermercados</a>
                                      <a class="dropdown-item" href="categorias.php?id=8017">Autopartes</a>
                                      <a class="dropdown-item" href="categorias.php?id=8016">Artesanias</a>

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



    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4 left">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Categorias</h5>
                            <div class="widget-content">
                              <div class="form-check">
                                <div class='radio'>
                                <label for='radio1' class='form-check-label'>
                                  <input type='radio' id='radio1' name='selec_caract' value='<?php echo $id_cat ?>' class='form-check-input '>Todos
                                </label>
                                </div>

                                  <?php
                                  $counter = 1;
                                  $cons_subca = "SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = $id_cat";
                                  $ejec2 = mysqli_query($conn, $cons_subca);
                                  while($fila=mysqli_fetch_array($ejec2)){
                                    $count2 = ++$counter;
                                    $id_sub           = $fila['ID_SUBCATEGORIA'];
                                  $subcat           = $fila['SUB_NOMBRE'];

                                  echo "
                                  <div class='radio'>
                                  <label for='radio$count2' class='form-check-label'>
                                    <input type='radio' id='radio$count2' name='selec_caract' value='$id_sub' class='form-check-input'>$subcat
                                  </label>
                                  </div>
                                  ";
                                }
                                ?>



                              </div>

                            </div>
                        </div>

                        </div>

                    </div>
                         <!--<div class="row justify-content-center">-->
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->

                                        <div class="world-catagory-area" id="div_car">
                                          <div class="title">
                                              <h5><?php echo $cat_nom, " > ", $subcat_nom?></h5>
                                          </div>
                                          <div id="formtags"  class="form-check">
                                            <?php

                                            $post2 = "SELECT  n.NEG_NOMBRE, g.GAL_FOTO, n.NEG_DESCRIPCION, n.NEG_FECHA
                                            FROM  galeria g, negocios n, categorias c, subcategoria s
                                            WHERE g.ID_NEGOCIO = n.ID_NEGOCIO
                                            AND g.GAL_TIPO = 'Logo'
                                            AND c.ID_CATEGORIA = s.ID_CATEGORIA
                                            AND n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
                                            AND n.ID_SUBCATEGORIA = $id_subcat";
                                            $ejec3 = mysqli_query($conn, $post2);
                                            while($fila=mysqli_fetch_array($ejec3)){
                                            $n_nom           = $fila['NEG_NOMBRE'];
                                            $descrip        = $fila['NEG_DESCRIPCION'];
                                            $img         = $fila['GAL_FOTO'];
                                            $fech         = $fila['NEG_FECHA'];
                                            echo "
                                            <div class='single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.3s'>
                                            <div class='post-thumbnail'>
                                                <img src='$img'>
                                            </div>
                                            <div class='post-content'>
                                                <a href='#' class='headline'>
                                                <h5>$n_nom</h5>
                                            </a>
                                            <p>$descrip</p>
                                            <div class='post-meta'>
                                                <p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>$fech</a></p>
                                            </div>
                                        </div>
                                        </div>
                                            ";
                                          } ?>


                                      </div>
                                      <!-- fin div ajax -->
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


                            <script type="text/javascript">
                             $(document).ready(function ()
                              {
                                var selected;
                               $("input[name='selec_caract']").click(function()
                               {
                                //$("#div_car:hidden").show();
                                selected = $(this).val();
                                console.log(selected);
                                $.ajax({
                                    url: 'categoria_get_subca.php',
                                    type: 'POST',
                                    data: "id="+selected,
                                    dataType: 'JSON',
                                    success: function(response){
                                      $("#formtags").empty();
                                      document.getElementById("formtags").innerHTML = "";
                                        var len = response.length;
                                        for(var i=0; i<len; i++){
                                            var nom = response[i].nom;
                                            var descrip = response[i].descrip;
                                            var img = response[i].img;
                                            var fecha = response[i].fecha;
                                            var tr_str = "<div class='single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.3s'>" +
                                                "<div class='post-thumbnail'>"+
                                                "<img src='"+img+"'>"+
                                                "</div>"+
                                                "<div class='post-content'>" +
                                                "<a href='#' class='headline'>" +
                                                "<h5>"+nom+"</h5>"+
                                                "</a>"+
                                                "<p>"+descrip+"</p>"+
                                                "<div class='post-meta'>"+
                                                    "<p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>"+fecha+"</a></p>"+
                                                "</div>"+
                                            "</div>"+
                                        "</div>";

                                            $("#formtags").append(tr_str);
                                        }

                                    }
                                });

                              });
                            });
                               </script>


                        </body>

                        </html>
