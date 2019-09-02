<?php

    include'conexion.php';

    $publicacion ="SELECT * FROM PUBLICACION";
?>
<html>

<head>
  <!-- Required meta tags-->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Nuevo negocio</title>

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
            <a href="index.php">
              <img src="images/icon/logo1.png" alt="Cabofind" />
            </a>
          </div>
          <div class="header__navbar">
            <ul class="list-unstyled">
              <li class="has-sub">
                <a href="negocios">
                  <i class="fas fa-tachometer-alt"></i>Negocios
                  <span class="bot-line"></span>
                </a>
                
              </li>
              
              <li>
                <a href="table.html">
                  <i class="fas fa-trophy"></i>
                  <span class="bot-line"></span>Caracteristicas</a>
              </li>
              <li class="has-sub">
                <a href="publicaciones.php">
                  <i class="fas fa-copy"></i>
                  <span class="bot-line"></span>Publicaciones</a>
                
</li>


              <li class="has-sub">
                <a href="#">
                  <i class="fas fa-desktop"></i>
                  <span class="bot-line"></span>Usuarios</a>
                
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
                  <a class="js-acc-btn" href="#">Usuario</a>
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
                        <a href="#">john doe</a>
                      </h5>
                      <span class="email">johndoe@example.com</span>
                    </div>
                  </div>
                  <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                  </div>
                  <div class="account-dropdown__footer">
                    <a href="#">
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
            <a class="logo" href="index.php">
              <img src="images/icon/logo1.png" alt="Cabofind" />
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
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                  <a href="index2.html">Dashboard 2</a>
                </li>
                <li>
                  <a href="index3.html">Dashboard 3</a>
                </li>
                <li>
                  <a href="index4.html">Dashboard 4</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
              <a href="table.html">
                <i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
              <a href="form.html">
                <i class="far fa-check-square"></i>Forms</a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-calendar-alt"></i>Calendar</a>
            </li>
            <li>
              <a href="map.html">
                <i class="fas fa-map-marker-alt"></i>Maps</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Pages</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="login.html">Login</a>
                </li>
                <li>
                  <a href="register.html">Register</a>
                </li>
                <li>
                  <a href="forget-pass.html">Forget Password</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-desktop"></i>UI Elements</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="button.html">Button</a>
                </li>
                <li>
                  <a href="badge.html">Badges</a>
                </li>
                <li>
                  <a href="tab.html">Tabs</a>
                </li>
                <li>
                  <a href="card.html">Cards</a>
                </li>
                <li>
                  <a href="alert.html">Alerts</a>
                </li>
                <li>
                  <a href="progress-bar.html">Progress Bars</a>
                </li>
                <li>
                  <a href="modal.html">Modals</a>
                </li>
                <li>
                  <a href="switch.html">Switchs</a>
                </li>
                <li>
                  <a href="grid.html">Grids</a>
                </li>
                <li>
                  <a href="fontawesome.html">Fontawesome Icon</a>
                </li>
                <li>
                  <a href="typo.html">Typography</a>
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
              <a class="js-acc-btn" href="#">john doe</a>
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
                    <a href="#">john doe</a>
                  </h5>
                  <span class="email">johndoe@example.com</span>
                </div>
              </div>
              <div class="account-dropdown__body">
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-account"></i>Account</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-settings"></i>Setting</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                </div>
              </div>
              <div class="account-dropdown__footer">
                <a href="#">
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
          <div class="row">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-header">
              <strong>Nueva</strong> Publicacion
            </div>
            <div class="card-body">
						<form id="registerSubmit" enctype="multipart/form-data" content="text/html; charset=utf-8" >
            <div class="row">
            <div class="col-lg-6">
                                <div class="card">
        <div class="card-header">
        <strong>Datos</strong>
        <small> de la empresa</small>
        </div>
        <div class="card-body card-block">
          <div class="row form-group">
                      <div class="col col-md-12">
                          <div class="input-group">
                              <div class="input-group-addon">
                                  <i class="fa fa-user"></i>
                              </div>
                              <input type="text" id="empresa" name="empresa" placeholder="Nombre negocio" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row form-group">
                              <div class="col col-md-12">
                                  <div class="input-group">
                                      <div class="input-group-addon">
                                          <i class="fa fa-envelope"></i>
                                      </div>
                                      <input type="text" id="correo" name="correo" placeholder="Correo" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="row form-group">
                                      <div class="col col-md-12">
                                          <div class="input-group">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-phone"></i>
                                              </div>
                                              <input type="number" id="telefono" name="telefono" placeholder="telefono" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                              <div class="col col-md-12">
                                                  <div class="input-group">
                                                      <div class="input-group-addon">
                                                          <i class="fa fa-home"></i>
                                                      </div>
                                                      <input type="text" id="direccion" name="direccion" placeholder="direccion" class="form-control">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-12">
                                                          <div class="input-group">
                                                              <div class="input-group-addon">
                                                                  <i class="fa fa-user"></i>
                                                              </div>
                                                              <input type="text" id="responsable" name="responsable" placeholder="responsable" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row form-group">
                                                              <div class="col col-md-12">
                                                                  <div class="input-group">
                                                                      <div class="input-group-addon">
                                                                          <i class="fa fa-pencil-square-o"></i>
                                                                      </div>
                                                                      <input type="text" id="descripcion" name="descripcion" placeholder="descripcion" class="form-control">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="row form-group">
                                                                      <div class="col col-md-12">
                                                                          <div class="input-group">
                                                                              <div class="input-group-addon">
                                                                                  <i class="fa fa-tag"></i>
                                                                              </div>
                                                                              <input type="text" id="etiquetas" name="etiquetas" placeholder="etiquetas" class="form-control">
                                                                            </div>
                                                                          </div>
                                                                        </div>
																	</div>
																</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Categorías</strong>
                                        <small> y especificaciones</small>
                                    </div>
                                    <div class="card-body card-block">
                                      <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Selecciona categoria" disabled class="form-control">
                                                <div class="input-group-btn">
                                                  <select id='select_cat' name='categoria' class="dropdown-toggle btn btn-primary" type="button">
                                                    <option>Seleccione</option>
                                                  <?php
                                                  $cons_cate = "SELECT * FROM categorias;";
                                                  $ejecutar = mysqli_query($conn, $cons_cate);

                                                while($fila=mysqli_fetch_array($ejecutar)){
                                                    $categoria          = $fila['CAT_NOMBRE'];
                                                    $id_cat             = $fila['ID_CATEGORIA'];
                                                    echo "<option value='$id_cat'>$categoria</option>";
                                                  }
                                                     ?>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                          <div class="col col-md-12">
                                              <div class="input-group">
                                                  <input type="text" placeholder="Selecciona subcategoria" disabled class="form-control">
                                                  <div class="input-group-btn">
                                                    <select id='select_subcat' name='subcategoria' class="dropdown-toggle btn btn-primary" type="button">
                                                      <option>Seleccione</option>
                                                     </select>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-12">
                                                          <div class="input-group">
                                                              <div class="input-group-addon">
                                                                  <i class="fa fa-location-arrow"></i>
                                                              </div>
                                                              <input type="text" id="map" name="map" placeholder="URL localizacion" class="form-control">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      
                                                        </form>
															</div>

<div class="card-footer">
<button type="button" onclick="confirmAdd()" class="btn btn-success btn-sm">
<i class="fa fa-dot-circle-o"></i> Submit
</button>

<button type="reset" class="btn btn-danger btn-sm">
<i class="fa fa-ban"></i> Reset
</button>
</div>
</div>
</div>
</div>
</div>

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



  <!-- Select cambia solo :o-->
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

  <!-- file input image preview-->
  <script>
  function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah')
                   .attr('src', e.target.result);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }
  </script>
  <!-- swal confirmacion-->
  <script>
  function confirmAdd(){
  swal({

     title: 'Estás seguro?',
     text: "Se guardarán los datos en la BD",
     type: 'question',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: '¡Afirma!',
     showLoaderOnConfirm: true,
     preConfirm: function() {
       return new Promise(function(resolve) {
         $.ajax({
          url: 'negocio_nuevo_fn.php',
          type: 'POST',
          data: $("#registerSubmit").serialize(),
          dataType: 'json'
       })
       .done(function(response){
          swal('Agregado exitosamente!', response.message, response.status).then(function(){
              location.reload();
          });
       })
       .fail(function(){
          swal('Oops...', 'Something went wrong with ajax !');
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
