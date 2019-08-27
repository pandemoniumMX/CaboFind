<?php

    include'conexion.php';
    include'fuctions.php';


    session_start();
    $usu_nom= $_SESSION['nombre'];
    $usu_tip= $_SESSION['tipo'];
?>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Negocios</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
      <div class="section__content section__content--p35">
        <div class="header3-wrap">
          <div class="header__logo">
            <a href="#">
              <img src="images/icon/logo-white.png" alt="CoolAdmin" />
            </a>
          </div>
          <div class="header__navbar">
            <ul class="list-unstyled">
              <li class="has-sub">
                <a href="index.php">
                  <i class="fas fa-tachometer-alt"></i>Negocios
                  <span class="bot-line"></span>
                </a>
                <ul class="header3-sub-list list-unstyled">
                  <li>
                    <a href="index.html">Agregar</a>
                  </li>
                  <li>
                    <a href="index2.html">Editar</a>
                  </li>
                  <li>
                    <a href="index3.html">Borrar</a>
                  </li>
                </ul>
              </li>
              
              <li>
                <a href="caracteristicas.php">
                  <i class="fas fa-trophy"></i>
                  <span class="bot-line"></span>Caracteristicas</a>
              </li>
              <li>
                <a href="servicios.php">
                  <i class="fas fa-trophy"></i>
                  <span class="bot-line"></span>Servicios</a>
              </li>
              <li class="has-sub">
                <a href="publicaciones.php">
                  <i class="fas fa-copy"></i>
                  <span class="bot-line"></span>Publicaciones</a>
                <ul class="header3-sub-list list-unstyled">
                  <li>
                    <a href="publicacion_nueva.php">Agregar</a>
                  </li>
                  <li>
                    <a href="#">Editar</a>
                  </li>
                  <li>
                    <a href="#">Borrar</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a href="#">
                  <i class="fas fa-desktop"></i>
                  <span class="bot-line"></span>Usuarios</a>
                <ul class="header3-sub-list list-unstyled">
                  <li>
                    <a href="button.html">Agregar</a>
                  </li>
                  <li>
                    <a href="badge.html">Editar</a>
                  </li>
                  <li>
                    <a href="tab.html">Borrar</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="header__tool">
            <div class="account-wrap">
              <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                  <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                </div>
                <div class="content">
                  <a class="js-acc-btn" ><?php echo $usu_nom; ?></a>
                </div>
                <div class="account-dropdown js-dropdown">
                  <div class="info clearfix">
                    <div class="image">
                      <a href="#">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </a>
                    </div>
                    <div class="content">
                      <h5 class="name">
                        <a href="#"><?php echo $usu_nom; ?></a>
                      </h5>
                      <span class="email"><?php echo $usu_tip; ?></span>
                    </div>
                  </div>
                  <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-account"></i>Account</a>
                    </div>

                  </div>
                  <div class="account-dropdown__footer">
                    <a href="destroy.php">
                      <i class="zmdi zmdi-power"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="images/icon/logo-white.png" alt="CoolAdmin" />
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
              <a class="js-arrow" href="index.php">
                <i class="fas fa-globe"></i>Negocios</a>
             
            </li>
            
            <li class="has-sub">
              <a class="js-arrow" href="caracteristicas.php">
                <i class="fas fa-tags"></i>Caracteristicas</a>
              
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="servicios.php">
                <i class="fas fa-tags"></i>Servicios</a>
              
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="publicaciones.php">
                <i class="fas fa-tags"></i>Publicaciones</a>
             
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-users"></i>Usuarios</a>
             
            </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
      <div class="header__tool">

        <div class="account-wrap">
          <div class="account-item account-item--style2 clearfix js-item-menu">
            <div class="image">
              <img src="images/icon/avatar-01.jpg" alt="John Doe" />
            </div>
            <div class="content">
              <a class="js-acc-btn" href="#"><?php echo $usu_nom; ?></a>
            </div>
            <div class="account-dropdown js-dropdown">
              <div class="info clearfix">
                <div class="image">
                  <a href="#">
                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                  </a>
                </div>
                <div class="content">
                  <h5 class="name">
                    <a href="#"><?php echo $usu_nom; ?></a>
                  </h5>
                  <span class="email"><?php echo $usu_tip; ?></span>
                </div>
              </div>
              <div class="account-dropdown__body">
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-account"></i>Account</a>
                </div>

              </div>
              <div class="account-dropdown__footer">
                <a href="destroy.php">
                  <i class="zmdi zmdi-power"></i>Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END HEADER MOBILE -->
    <!-- PAGE CONTAINER-->
    <div class="page-content--bgf7"></br>
          <div class="container">
                    <div class="container-fluid">
                    <div class="card">

                      <div class="card-header">
                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#largeModal">
                        Agregar caracteristica
                        </button>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive table--no-card m-b-30">
                              <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                      <tr>
                                          <th>id</th>
                                          <th>Nombre</th>
                                          <th>Nombre inglés</th>

                                          <th>Estatus</th>
                                          <th>Fecha</th>
                                          <th class="text-right">Acción</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $public = "SELECT * FROM caracteristicas;";
                                    $ejecutar = mysqli_query($conn, $public);

                                  while($fila=mysqli_fetch_array($ejecutar)){
                                      $id_car       = $fila['ID_CARACTERISTICAS'];
                                      $nom       = $fila['CAR_NOMBRE'];
                                      $nom_ing       = $fila['CAR_NOMBRE_ING'];

                                      $esta       = $fila['CAR_ESTATUS'];
                                      $fech       = $fila['CAR_FECHA'];

                                     ?>
                                     <tr>
                                         <td><?php echo $id_car ?></td>
                                         <td><?php echo $nom ?></td>
                                         <td><?php echo $nom_ing ?></td>

                                         <td><?php echo $esta ?></td>
                                         <td><?php echo $fech ?></td>
                                         <td class="text-right">
                                           <div class="table-data-feature">
                                             <button class="item" title="tooltip" onclick="window.location.href='galeria.php?id=<?php echo $id_car ?>'" data-original-title="Edit">
                                               <i class="zmdi zmdi-image"></i>
                                          </button>
                                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button class="item" onclick="borrar_emp(<?php echo $id_car ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                          <i class="zmdi zmdi-delete"></i>
                                     </button>


                                      </div>
                                       </td>
                                       </tr>
                                     <?php } ?>
                                  </tbody>
                              </table>
              </div>
              </div>
              </div>
              </div>
        </div>

    </div>


<!-- Modal start -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
    				<div class="modal-dialog modal-lg" role="document">
    					<div class="modal-content">
    						<div class="modal-header">
    							<h5 class="modal-title" id="largeModalLabel">Negocios relacionados</h5>
    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    								<span aria-hidden="true">×</span>
    							</button>
    						</div>
    						<div class="modal-body">
                  <!-- contenido del modal -->

          <form id="registerSubmit" enctype="multipart/form-data" content="text/html; charset=utf-8" >
            <div class="row">

                                  <div class="row form-group">
                              <div class="col col-md-12">
                        <div class="input-group">
                       <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                        </div>
                          <input type="text" id="nom" name="nom" required placeholder="Nombre" class="form-control">
                          <input type="text" id="nom_ing" name="nom_ing" required placeholder="Nombre inglés" class="form-control">

                            </div>
                              </div>
                            </div>
                                                  </div>
                                                    </div>
                                                  </form>

    						<div class="modal-footer">
    							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    							<button type="submit" value="submit" onclick="submitContactForm()" class="btn btn-primary">Confirm</button>
    						</div>
    					</div>
    				</div>
    			</div>
<!-- modal end -->



    <!-- COPYRIGHT-->
    <section class="p-t-60 p-b-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END COPYRIGHT-->
  </div>


  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
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
  <script src="vendor/select2/select2.min.js"></script>
  <!-- sweetalert-->

<script src="js/sweetalert2.all.min.js"></script>

  <!-- Main JS-->
  <script src="js/main.js"></script>

<!-- ajax submit modal-->
<script>
function submitContactForm(){
                $.ajax({
                 url: 'caracteristicas_insertcar_fn.php',
                 type: 'POST',
                 data: $("#registerSubmit").serialize(),
                 dataType: 'json'
               })
               .done(function(response){
                 swal('HECHO!', response.message, response.status).then(function(){
                     location.reload();
                 });
               })
               .fail(function(response){
                 swal('Oops...', 'Something went wrong with ajax !',response.message);
               });
               };
</script>

<!-- select ajax subcategoria-->
  <script type="text/javascript">

  $(document).ready(function(){

    $("#select_cat").change(function(){
        var deptid = $(this).val();

        $.ajax({
            url: 'registro_fn_get_subcat.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#select_subcat").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];

                    $("#select_subcat").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

  });
  </script>

<!-- funcion ajax borrar en tabla-->
  <script>
  function borrar_emp(id){
  swal({
     title: 'Estás seguro?',
     text: "Esta acción no se puede revertir!",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: '¡Si!, borralo',
     showLoaderOnConfirm: true,
     preConfirm: function() {
       return new Promise(function(resolve) {
         $.ajax({
          url: 'caracteristica_delete_fn.php',
          type: 'POST',
          data: 'delete='+id,
          dataType: 'json'
       })
       .done(function(response){
          swal('Borrado exitosamente!', response.message, response.status).then(function(){
              location.reload();
          });
       })
       .fail(function(){
          swal('Oops...', 'Something went wrong with ajax !', 'error');
       });
       });
     },
     allowOutsideClick: false
  });
  }
  </script>




  </body>

  </html>
  <!-- end document-->
