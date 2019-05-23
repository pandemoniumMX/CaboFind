<?php

    include'conexion.php';

    $publicacion ="SELECT * FROM PUBLICACION";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>publicaciones</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="css/dropzone.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

<link href="css/jquery.steps.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="js/dropzone.js"></script>


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Empresas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li class="active">
                                    <a href="registro negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="categorias.php">
                            <i class="fas fa-star"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="caracteristicas.php">
                                <i class="fas fa-heart"></i>Caracteristicas</a>
                        </li>

                        <li>
                            <a class="js-arrow" href="galeria.php">
                                <i class="fas fa-picture-o"></i>Galería</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="reseñas.php">
                            <i class="fas fa-comments"></i>Reseñas</a>
                        </li>
                        <li>
                        <a href="usuarios.php">
                            <i class="fas fa-user"></i>Usuarios</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Empresas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li class="active">
                                <a href="registro_negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
                                <a href="modificar_empresa.php">Modificar empresa</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="categorias.php">
                                <i class="fas fa-star"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="caracteristicas.php">
                            <i class="fas fa-heart"></i>Caracteristicas</a>
                        </li>

                        <li>
                            <a href="publicaciones.php">
                                <i class="fas fa-picture-o"></i>Publicaciones</a>
                        </li>
                        <li>

                            <a  href="reseñas.php">
                            <i class="fas fa-comments"></i>Reseñas</a>
                        </li>
                        <li>
                        <a href="usuarios.php">
                                <i class="fas fa-user"></i>Usuarios</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">



                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="card">

                      <div class="card-header">
                        <h3>Crear nueva publicación</h3>
                      </div>
                      <div class="card-body">
      <?php
      $negocios = "SELECT * FROM negocios;";
      $ejecutar = mysqli_query($conn, $negocios);
       ?>
    <form id="frmTarget" class="dropzone">
      <div class="row col-10">
        <label class=" form-control-label">Selecciona la empresa a la que pertenece la publicación</label>
      </div>
        <div class="row col-10">
        <select name="s_neg" id="select_neg" required>
          <option>...</option>
          <?php
        while($fila=mysqli_fetch_array($ejecutar)){
            $neg_nom          = $fila['NEG_NOMBRE'];
            $id_neg            = $fila['ID_NEGOCIO'];
            echo "<option value='$id_neg'>$neg_nom</option>";
          }
             ?>
        </select>
      </div>
      <?php
      $expo = "SELECT * FROM exposicion;";
      $ejec = mysqli_query($conn, $expo);
       ?>
    <form id="frmTarget" class="dropzone">
      <div class="row col-10">
        <label class=" form-control-label">Selecciona nivel de exposicion</label>
      </div>
        <div class="row col-10">
        <select name="s_exp"  required>
          <option>...</option>
          <?php
        while($fila=mysqli_fetch_array($ejec)){
            $exp_nom          = $fila['EXP_NIVEL'];
            $id_expo            = $fila['ID_EXPOSICION'];
            echo "<option value='$id_expo'>$exp_nom</option>";
          }
             ?>
        </select>
      </div>
    <div class="row col-8">
    <label class=" form-control-label">Titulo</label>
    </div>
    <div class="row col-8">
    <input type="text" name="titulo" id="titulo" required placeholder="Titulo" class="form-control">
    </div>
    <div class="row col-8">
    <label  class=" form-control-label">Nota</label>
    </div>
    <div class="row col-8">
    <textarea name="nota" id="nota" rows="6" required placeholder="<...>" class="form-control"></textarea>
    </div>
    <div class="row col-8">
      <label  class=" form-control-label">Imagenes</label>
    </div>
<div class="row col-8">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</div>
</form>
  <div class="row col-8">
<button type="submit" id="button" class="btn btn-primary">Submit</button>
  </div>




                          </div>
                    </div>
              </div>
        </div>
    </div>



    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- steps jquery-->
    <script src="js/jquery.steps.js"></script>
    <script src="js/jquery.steps.min.js"></script>
    <!-- sweetalert-->
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>


<script>
Dropzone.options.frmTarget = {
    autoProcessQueue: false,
    maxFiles: 3,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    parallelUploads: 3,
    url: 'upload.php',
    init: function () {

        var myDropzone = this;

        // Update selector to match your button
        $("#button").click(function (e) {
            e.preventDefault();
            myDropzone.processQueue();
        });

        this.on('sending', function(file, xhr, formData) {
            // Append all form inputs to the formData Dropzone will POST
            var data = $('#frmTarget').serializeArray();
            $.each(data, function(key, el) {
                formData.append(el.name, el.value);
            });
        });
    }
}
</script>


<script type='text/javascript'>
function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('preview');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>

</html>
<!-- end document-->
