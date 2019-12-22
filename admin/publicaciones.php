<?php
    include'conexion.php';
    include'fuctions.php';
    session_start();
    $usu_nom= $_SESSION['nombre'];
    $usu_tip= $_SESSION['tipo'];
    if($usu_tip != "Admin") {
      //echo "<script>alert('No tienes acceso a esta página!')</script>";
        echo "<script>window.open('Error_restrinccion.html','_self')</script>";
      }
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

 <!-- Data picker -->
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>


 <script>
			$('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
			</script>


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
                
</li>
<li class="has-sub">
                <a href="marketplace.php">
                  <i class="fas fa-copy"></i>
                  <span class="bot-line"></span>Marketplace</a>
                
</li>


              <li class="has-sub">
                <a href="registro.php">
                  <i class="fas fa-desktop"></i>
                  <span class="bot-line"></span>Registro</a>
                
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
              <a class="js-arrow" href="marketplace.php">
                <i class="fas fa-tags"></i>Marketplace</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
               

              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="registro.php">
                <i class="fas fa-users"></i>Registro</a>
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
                    <div class="container-fluid">

<div class="tile">
  <div class="tile-body">
<table id="a-tables" class="table table-hover table-dark table-responsive">
<thead>
<tr>
                                          <th>id</th>
                                          <th>Titulo</th>
                                          <th>Negocio</th>
                                          <th class="text-right">Fecha</th>
                                          <th class="text-right">Estatus</th>
                                          <th class="text-right">Acción</th>
                                      </tr>
              </thead>
<?php
 $consulta = "SELECT * FROM publicacion p, negocios n
 WHERE p.negocios_ID_NEGOCIO = n.ID_NEGOCIO;";
 $ejecutar = mysqli_query($conn, $consulta);
while($fila=mysqli_fetch_array($ejecutar)){
  $id       = $fila['ID_PUBLICACION'];
  $titu_pub  = $fila['PUB_TITULO'];
  $nom_neg   = $fila['NEG_NOMBRE'];
  $estatus   = $fila['PUB_ESTATUS'];
  $ingles   = $fila['NEG_INGLES'];
  $fecha_pub  = $fila['PUB_FECHA'];
  $fecha_lim  = $fila['PUB_FECHA_LIMITE'];


?>
<tr>
                                         <td><?php echo $id ?></td>
                                         <td><?php echo $titu_pub ?></td>
                                         <td><?php echo $nom_neg ?></td>
                                         <td><?php echo $fecha_pub ?></td>
                                         <td><?php echo $estatus ?></td>
                                         <td width="14%">
                                        <?php
                                        if ($estatus == "A"){
                                          if($ingles == "True"){
                                            echo"
                                            <a href='#' onclick='editar_pub($id), get_pub($id);' title='Modificar ' ><i class='btn-sm btn-success fa fa-refresh'></i></a>
                                            <a href='publicacion_notificacion_fn.php?id=$id' onclick='pregunta()' name='tuformulario' title='Enviar notificacion esp ' ><i class='btn-sm btn-warning fa fa-bell'></i></a> 
                                            <a href='publicacion_notificacion_fn_ing.php?id=$id' onclick='pregunta()' name='tuformulario' title='Enviar notificacion ing' ><i class='btn-sm btn-warning fa fa-bell'></i></a>  
                                            <a href='estadisticas_xp.php?id=$id' title='Estadisticas ' ><i class='btn-sm btn-info fa fa-eye'></i></a>   
                                            <a href='modificar_empresa_car_delete_fn.php?id=$id;' title='Eliminar ' ><i class='btn-sm btn-danger fa fa-trash'></i></a>   
                                                ";

                                          }if($ingles == "False"){
                                            echo"
                                          <a href='#' onclick='editar_pub($id), get_pub($id);' title='Modificar ' ><i class='btn-sm btn-success fa fa-refresh'></i></a>
                                          <a href='publicacion_notificacion_fn.php?id=$id' onclick='pregunta()' name='tuformulario' title='Enviar notificacion esp ' ><i class='btn-sm btn-warning fa fa-bell'></i></a> 
                                          <a href='estadisticas_xp.php?id=$id' title='Estadisticas ' ><i class='btn-sm btn-info fa fa-eye'></i></a>   
                                          <a href='modificar_empresa_car_delete_fn.php?id=$id;' title='Eliminar ' ><i class='btn-sm btn-danger fa fa-trash'></i></a>   
                                              ";
                                          }
                                        
                                        }else{  echo "

                                          <a href='#' onclick='editar_pub($id), get_pub($id);' title='Modificar ' ><i class='btn-sm btn-success fa fa-refresh'></i></a>
                      
                                          ";
                                          }
                                        
                                          ?>

                                      </tr>
<?php } ?>
<tbody></br>
Resultado de publicaciones
</tbody>
</table>
</div></div></div>

              <!--CIERRA TABLA -->
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

                            <input type="text" id='s_neg' name='s_neg' required placeholder="Selecciona la empresa que esta relacionada" disabled class="form-control">
                            <div class="input-group-btn">
                              <select id='s_neg' name='s_neg' class="dropdown-toggle btn btn-primary" type="button">
                              <option disabled selected>Seleccionar negocio</option>
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
                              <div class="col col-md-9">
                                  <div class="input-group">

                                      <input type="text" id='publicacion' required name='publicacion' placeholder="Caducidad formato YYYY-MM-DD" disabled class="form-control">
                                      <div class="input-group-btn">
                                      <input class="form-control" name="caducidad" id="caducidad" type="text" placeholder="Formato YYYY-MM-DD">

                                        
                                      </div>

                                      
                                  </div>
                              </div>
                              </div>
                              </br></br>

                    <div class="row form-group">                              

                    <div class="col col-md-6">
                        <div class="input-group">

                            <input type="text" id='publicacion' required name='publicacion' placeholder="Selecciona la empresa que esta relacionada" disabled class="form-control">
                            <div class="input-group-btn">
                              <select id='publicacion' name='publicacion' class="dropdown-toggle btn btn-primary" type="button">
                              <option disabled selected>Tipo de publicacion</option>
                                <option value="Publicacion">Normal</option>
                                <option value="Promocion">Promoción</option>
                                <option value="Eventos">Eventos</option>

                               </select>

                               
                            </div>

                             
                        </div>
                    </div>
                    </div>


                    
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Imagen esp</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <div class="image-upload">
                        <label for="file-input">
                          <img id="blah" src="images/giphy.gif" require style="max-width: 30%;" />
                        </label>

                        <input id="file-input" name="file" required type="file" style="display:none" onchange="readURL(this);" />
                      </div>

                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Imagen ing</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <div class="image-upload">
                        <label for="file-input1">
                          <img id="blah1" src="images/giphy.gif"  style="max-width: 30%;" />
                        </label>

                        <input id="file-input1" name="file1"  type="file" style="display:none" onchange="readURL1(this);" />
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

   <!-- Data table plugin-->
   <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#a-tables').DataTable();</script>

  <!-- sweetalert-->
<script src="js/sweetalert2.all.min.js"></script>

<!-- AlertDialog confirmar envio notificacion-->
<script language="JavaScript">
function pregunta(){
   //Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Seguro de enviar notificación?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
  document.tuformulario.submit();
}
//Detectamos si el usuario denegó el mensaje
else {
alert("¡Haz denegado la notificación!");
location.reload();
}
}
</script>

    <!-- file input image preview-->
    <script>
function readURL(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
             $('#blah')
                 .attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
     }
 }
 $("#file-input").change(function(){
        readURL(this);
    });
</script>

<script>
function readURL1(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
             $('#blah1')
                 .attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
     }
 }
 $("#file-input1").change(function(){
        readURL1(this);
    });
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


<script type="text/javascript">
  //ventana de nuevo cliente
    function editar_pub(id){
   swal({
   title: 'Editar Publicacion ',
   html:
   '<div class="col-lg-12"> <form action="publicacion_update_fn.php" method="post" name="data">'+
   '<input type="text" id="idps" name="idps"  readonly required  class="form-control"></br>' +
   '<input type="hidden" id="id_g" name="id_g"  readonly required  class="form-control"></br>' +

   //'<input  type="text" id="idn"  name="idn" readonly class="form-control border-input maxlength="25" required>' +
    '<input type="text" id="titulos" placeholder="Título en español" required name="titulos" class="form-control"></br>'+
    '<input type="text" id="titulo_ings" required name="titulo_ings" placeholder="Título en inglés" class="form-control"></br>'+
    '<textarea id="detalles" name="detalles" required  rows="9" placeholder="Información de la publicacion español" class="form-control"></textarea></br>'+
    '<textarea id="detalle_ings" name="detalle_ings" required  rows="9" placeholder="Información de la publicacion inglés" class="form-control"></textarea></br>'+
    '<input type="text" id="videos"  name="videos"  placeholder="Link de youtube(Opcional)" class="form-control"></br>'+
    '<label>Empresa de la publicacion</label>'+
                     '<div class="input-group-btn">'+
                    '<select id="s_negs" name="s_negs" class="dropdown-toggle btn btn-success" type="button">'+
                   '<option disabled selected>Selecciona una empresa</option>'+                   
                        <?php

                          $empresa="SELECT n.ID_NEGOCIO, p.ID_PUBLICACION, g.GAL_FOTO,g.GAL_FOTO_ING, p.PUB_TITULO,p.PUB_DETALLE,p.PUB_TITULO_ING,p.PUB_DETALLE_ING
                          FROM negocios n, subcategoria s, galeria g , categorias c, publicacion p
                          WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
                          and c.ID_CATEGORIA =s.ID_CATEGORIA
                          and p.negocios_ID_NEGOCIO = n.ID_NEGOCIO
                          and n.ID_NEGOCIO = g.ID_NEGOCIO
                          and p.galeria_ID_GALERIA = g.ID_GALERIA
                          and g.GAL_TIPO='Publicacion'
                          and p.PUB_TIPO is not null
                          and n.NEG_ESTATUS='A'
                          and p.PUB_ESTATUS='A'         ";

                          //HConsulta y obtengo los datos
                          $ejecutar = mysqli_query($conn, $empresa);
                          while($fila=mysqli_fetch_array($ejecutar)){
                          $idp           = $fila['ID_PUBLICACION'];
                         

                          }


                        $negocios = "SELECT * FROM negocios;";
                        $ejecutar = mysqli_query($conn, $negocios);
                      while($fila=mysqli_fetch_array($ejecutar)){?>                          
                      '<?php echo '<option value="'.$fila["ID_NEGOCIO"].'">'.$fila["NEG_NOMBRE"].'</option>'; ?>'+
                      
                      <?php } ?>
                        
                  '</select>'+
                 '</div>'+
                 '<label>Fecha caducidad formato YYYY-MM-DD</label></br>'+
                 '<input class="form-control btn-warning" name="caducidad1" id="caducidad1" type="text"  style="background-color:white;"placeholder="Formato YYYY-MM-DD">'+
    '<label>Tipo de publicacion</label></br>'+
    '            <div class="input-group-btn">'+
                              '<select id="publicacions" name="publicacions" class="dropdown-toggle btn btn-primary" type="button">'+
                              '<option disabled selected>Selecciona tipo</option>'+
                              '<option value="Publicacion">Normal</option>'+
                                '<option value="Promocion">Promoción</option>'+
                                '<option value="Eventos">Eventos</option>'+
                              '</select>'+
                              '</div>'+
                              '<label>Estatus</label></br>' +
                              '<select class="dropdown-toggle btn btn-info" type="button" required textalign="center" name="estatuss" id="estatuss"><option disabled selected>Selecciona estado</option><option value="A" >A</option><option value="B">B</option></select></br>'+   
                              '<label>Selecciona imagen esp</label></br>' +
                              <?php
                              $venta = "SELECT n.ID_NEGOCIO, p.ID_PUBLICACION,n.NEG_NOMBRE, n.NEG_LUGAR,n.NEG_FACEBOOK,n.NEG_INSTAGRAM,n.NEG_WEB, c.CAT_NOMBRE,s.SUB_NOMBRE, g.GAL_FOTO,g.GAL_FOTO_ING, p.PUB_TITULO,p.PUB_DETALLE,p.PUB_FECHA,p.PUB_VIDEO,n.NEG_TEL, n.NEG_CORREO, n.NEG_HORARIO
                              FROM negocios n, subcategoria s, galeria g , categorias c, publicacion p
                              WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
                              and c.ID_CATEGORIA =s.ID_CATEGORIA
                              and p.negocios_ID_NEGOCIO = n.ID_NEGOCIO
                              and n.ID_NEGOCIO = g.ID_NEGOCIO
                              and p.galeria_ID_GALERIA = g.ID_GALERIA
                              and g.GAL_TIPO='Publicacion'
                              and p.PUB_TIPO is not null
                              and n.NEG_ESTATUS='A'
                              and p.PUB_ESTATUS='A'
                              and p.ID_PUBLICACION=$idp";
                $ejec1 = mysqli_query($conn, $venta);
                while($filas=mysqli_fetch_array($ejec1)){

                  
                   ?>
                  '<?php echo '<img style="height: 350px; width: 100%; display: block;"  src="'.$filas["GAL_FOTO"].'"/>'; ?>'+
                      
                              '<input id="img_up" name="img_up" type="file"  value="" readonly class="form-control"  />'+
                              '<input id="img" name="img" type="text"  value="" readonly class="form-control"  />'+

                              '<label>Selecciona imagen ing</label></br>' +
                              '<?php echo '<img style="height: 350px; width: 100%; display: block;"  src="'.$filas["GAL_FOTO_ING"].'"/>'; ?>'+
                      
                      <?php } ?>

                              '<input id="img_up2" name="img_up2" type="file"  value="" readonly class="form-control"  />'+
                              '<input  id="img1" name="img1" type="text" value="" readonly class="form-control" />'+

    '<button type="submit"  class="btn btn-success btn-lg btn-block">Actualizar</button>'+
   '</form></div>',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: '</form> Actualizar solicitud',
   cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
   showConfirmButton: false,
   focusConfirm: false,
   buttonsStyling: false,
   reverseButtons: true,
   allowOutsideClick: false
})
};
  </script>


<script>
        //Script para mandar ID para generar la orden
        function get_pub(id){
        $.ajax({
        // la URL para la petición
        url : 'publicacion_get_fn.php',
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : {
        id : id
        },
        // especifica si será una petición POST o GET
        type : 'POST',
        // el tipo de información que se espera de respuesta
        dataType : 'json',
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(data) {
        //Manda Llamar id,nombre y apellido
       // $("#idp").val(data.data.id_car);
        $("#idps").val(data.data.idp);  
        $("#id_g").val(data.data.id_g);   
        $("#titulos").val(data.data.titulo);
        $("#titulo_ings").val(data.data.titulo_ing);        
        $("#detalles").val(data.data.detalle);
	      $("#detalle_ings").val(data.data.detalle_ing);
        $("#videos").val(data.data.video);
        $("#publicacions").val(data.data.publicacion);
        $("#estatuss").val(data.data.estatus);
        $("#caducidad1").val(data.data.caducidad);
	      $("#s_negs").val(data.data.s_neg);
	      $("#img").val(data.data.img);
        $("#img1").val(data.data.img1);

        
      },
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {
        },
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {
        }
        });
        }
    </script>







  </body>

  </html>
