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
              <img src="images/icon/logo.png" alt="Cabofind" />
            </a>
          </div>
          <div class="header__navbar">
            <ul class="list-unstyled">
              <li class="has-sub">
                <a href="index.php">
                  <i class="fas fa-tachometer-alt"></i>Negocios
                  <span class="bot-line"></span>
                </a>
                
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
              <img src="images/icon/logo.png" alt="Cabofind" />
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
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
            </li>
            <li class="has-sub">
              
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="caracteristicas.php">
                <i class="fas fa-tags"></i>Caracteristicas</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">         
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="servicios.php">
                <i class="fas fa-tags"></i>Servicios</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="publicaciones.php">
                <i class="fas fa-tags"></i>Publicaciones</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-users"></i>Usuarios</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
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
                    <div class="card">

                      <div class="card-header">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#newPublic" >Nueva publicación</button>

                      </div>
                      <div class="card-body">
                          <div class="table-responsive table--no-card m-b-30">
                              <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                      <tr>
                                          <th>id</th>
                                          <th>Titulo</th>
                                          <th>Negocio</th>
                                          <th class="text-right">Fecha</th>
                                          <th class="text-right">Acción</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $public = "SELECT * FROM publicacion p, negocios n
                                    WHERE p.negocios_ID_NEGOCIO = n.ID_NEGOCIO;";
                                    $ejecutar = mysqli_query($conn, $public);

                                  while($fila=mysqli_fetch_array($ejecutar)){
                                      $id_pub       = $fila['ID_PUBLICACION'];
                                      $titu_pub            = $fila['PUB_TITULO'];
                                      $nom_neg   = $fila['NEG_NOMBRE'];
                                      $fecha_pub   = $fila['PUB_FECHA'];
                                     ?>
                                     <tr>
                                         <td><?php echo $id_pub ?></td>
                                         <td><?php echo $titu_pub ?></td>
                                         <td><?php echo $nom_neg ?></td>
                                         <td class="text-right"><?php echo $fecha_pub ?></td>
                                         <td class="text-right">
                                           <div class="table-data-feature">
                                           <button class="item" title="Edit" data-toggle="modal" data-whatever="<?php echo $id_pub ?>" data-target="#largeModal" data-original-title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button class="item" data-toggle="tooltip" onclick="borrar_pub(<?php echo $id_pub ?>)" data-placement="top" title="Delete" data-original-title="Delete">
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

    <!-- modal edit publicacion -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="largeModalLabel">Nueva publicacion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- contenido del modal -->

                  <form enctype="multipart/form-data" form enctype="multipart/form-data" >
                    <div class="form-group">
                  <div class="input-group">
                <div class="input-group-addon">Titulo</div>
                <input type="text" id="titulo" required name="titulo" class="form-control">
                <div class="input-group-addon">
                  <i class="fa fa-text-height"></i>
                </div>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3">
                  <label for="textarea-input" class=" form-control-label">Publicacion</label>
              </div>
              <div class="col-12 col-md-9">
                  <textarea name="detalle" required id="detalle" rows="9" placeholder="Información de la publicacion" class="form-control"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-12">
                  <div class="input-group">
                      <input type="text" id='s_neg' name='s_neg' placeholder="Selecciona la empresa que esta relacionada" disabled class="form-control">
                      <div class="input-group-btn">
                        <select id='s_neg' name='s_neg' class="dropdown-toggle btn btn-primary" type="button">
                          <option>Seleccione</option>
                        <?php
                        $negocios = "SELECT * FROM negocios;";
                        $ejecutar = mysqli_query($conn, $negocios);

                      while($fila=mysqli_fetch_array($ejecutar)){
                          $neg_nom          = $fila['NEG_NOMBRE'];
                          $id_neg            = $fila['ID_NEGOCIO'];
                          echo "<option value='$id_neg'>$neg_nom</option>";
                        }
                           ?>
                         </select>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                  <label for="file-input" class=" form-control-label">Imagen</label>
              </div>
              <div class="col-12 col-md-9">


              </div>
            </div>
                         </form>

                                                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" value="submit" onclick="submitContactForm()" class="btn btn-primary">Confirm</button>
                </div>
              </div>
            </div>
          </div>
          <!-- fin del modal -->



          <!-- modal new publicacion -->
          <div class="modal fade" id="newPublic" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Nueva publicación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- contenido del modal -->
                          <form enctype="multipart/form-data" id="fupForm" form enctype="multipart/form-data">
                          <div class="form-group">

                        <div class="input-group">
                        <input type="text" id="titulo" required name="titulo" placeholder="Titulo de publicacion en español" class="form-control">  

                        
                        <i class="fa fa-text-height"></i>
                      </div>
                      </br>
                      <div class="input-group">
                        <input type="text" id="titulo_ing" required name="titulo_ing" placeholder="Titulo de publicacion en inglés" class="form-control"> 

                        
                        <i class="fa fa-text-height"></i>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                   

                    <div class="col-12 col-md-9">
                        <textarea name="detalle" required id="detalle" rows="9" placeholder="Información de la publicacion" class="form-control"></textarea>
                        </br>
                        <textarea name="detalle_ing" required id="detalle_ing" rows="9" placeholder="Información de la publicacion en inglés" class="form-control"></textarea>
                        <input type="text" id="video"  name="video" value="https://www.youtube.com/watch?v=9k6tvyyowk0" placeholder="Link de youtube(Opcional)" class="form-control"> 

                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-12">
                        <div class="input-group">

                            <input type="text" id='s_neg' name='s_neg' placeholder="Selecciona la empresa que esta relacionada" disabled class="form-control">
                            <div class="input-group-btn">
                              <select id='s_neg' name='s_neg' class="dropdown-toggle btn btn-primary" type="button">
                                <option>Seleccione</option>
                              <?php
                              $negocios = "SELECT * FROM negocios;";
                              $ejecutar = mysqli_query($conn, $negocios);

                            while($fila=mysqli_fetch_array($ejecutar)){
                                $neg_nom          = $fila['NEG_NOMBRE'];
                                $id_neg            = $fila['ID_NEGOCIO'];
                                echo "<option value='$id_neg'>$neg_nom</option>";
                              }
                                 ?>
                               </select>
                            </div>
                        </div>

                            </br></br>
                            <div class="row form-group">

                    <div class="col col-md-6">
                        <div class="input-group">

                            <input type="text" id='publicacion' name='publicacion' placeholder="Selecciona la empresa que esta relacionada" disabled class="form-control">
                            <div class="input-group-btn">
                              <select id='publicacion' name='publicacion' class="dropdown-toggle btn btn-primary" type="button">
                              <option value="NULL">Tipo de publicacion</option>
                                <option value="Publicacion">Normal</option>
                                <option value="Promocion">Promoción</option>
                                <option value="Recomendado">Recomendado</option>
                                <option value="Eventos">Eventos</option>

                               </select>
                            </div>
                        </div>
                    </div>
                    </div>


                    
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Imagen</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <div class="image-upload">
                        <label for="file-input">
                          <img id="blah" src="images/giphy.gif" style="max-width: 30%;" />
                        </label>

                        <input id="file-input" name="file" required type="file" style="display:none" onchange="readURL(this);" />
                      </div>

                    </div>
                  </div>



                                                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit"  class="btn btn-primary submitBtn" value="SAVE">Confirm</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- fin modal-->



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

  <!-- Main JS-->
  <script src="js/main.js"></script>

  <!-- sweetalert-->
<script src="js/sweetalert2.all.min.js"></script>


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
<!-- submit form-->
<script>
$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'publicacion_nueva_fn.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    Swal.fire({
                      type: 'success',
                      title: 'Publicacion realizada',
                      text: 'satisfactoriamente',
                    }).then(function(){
                        location.reload();
                    })
                }else{
                  Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                  })
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });

    //file type validation
    $("#file-input").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file-input").val('');
            return false;
        }
    });
});
</script>



  <!-- funcion ajax borrar en tabla-->
    <script>
    function borrar_pub(id){
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
            url: 'publicacion_delete_fn.php',
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
