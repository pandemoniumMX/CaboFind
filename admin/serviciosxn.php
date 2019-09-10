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

    $id_neg = ($_GET ['id']);


    $empresa="SELECT * from negocios where ID_NEGOCIO=$id_neg";
    
      $ejecutar = mysqli_query($conn, $empresa);
      while($fila=mysqli_fetch_array($ejecutar)){
      $nom           = $fila['NEG_NOMBRE'];
      }
                                                
      $car="SELECT n.ID_SERVICIOS, n.SERV_NOMBRE, e.NEG_SERV_ESTATUS, e.ID_NEG_SERV
      FROM   servicios  n, neg_serv e
      WHERE n.ID_SERVICIOS = e.servicios_ID_SERVICIOS and e.negocios_ID_NEGOCIO=$id_neg";
      
    $car3="SELECT n.SERV_NOMBRE
    FROM   servicios  n, neg_serv e
    WHERE n.ID_CARACTERISTICAS = e.servicios_ID_SERVICIOS and e.negocios_ID_NEGOCIO=$id_neg";

    $car2="SELECT * from servicios where SERV_ESTATUS='A' and SERV_NOMBRE <> '$car3' ";

    $exp="SELECT * from exposicion where EXP_ESTATUS='A'";


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
                      <div class="card-header">
                                      Servicios de la empresa: <strong> <?php echo $nom ?> </strong>
                                      
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-success active" onclick="add_caract();">Agregar servicios al negocio</button>
                                        <button type="button" class="btn btn-primary active" onclick="window.location.href='caracteristicasxn.php?id=<?php echo $id_neg ?>'">Agregar caracteristicas al negocio</button>
                                        <button type="button" class="btn btn-info active" onclick="add_exp();">Agregar exposición al negocio</button>

                                       
                                    </div>

                                    
                      </div>
                      <div class="card-body">
                          <div class="table-responsive table--no-card m-b-30">
                              <table class="table table-borderless table-striped table-earning">
                              <thead>

<th data-field="id">ID</th>
    <th data-field="id">Característica</th>
    <th data-field="fecha" data-sortable="true">Estado</th>      
    <th class="disabled-sorting">Acción</th>

</thead>
<?php
  $ejecutar = mysqli_query($conn, $car);
while($fila=mysqli_fetch_array($ejecutar)){
    $id          = $fila['ID_NEG_SERV'];
    $nom          = $fila['SERV_NOMBRE'];
    $est           = $fila['NEG_SERV_ESTATUS'];
  
?>
                <tr>
                    <td width="8%"><?php echo $id ?></td>
                    <td width="8%"><?php echo $nom ?></td>
                    <td width="14%"><?php echo $est ?></td>
                  
                    <td width="14%">
                      <?php echo"
                 <a href='#' onclick='update_car($id), get_car($id);' title='Modificar ' ><i class='btn-sm btn-success fa fa-refresh'></i></a>   
                 <a href='modificar_empresa_car_delete_fn.php?id=$id;' title='Eliminar ' ><i class='btn-sm btn-danger fa fa-trash'></i></a>   
                    "
                  ?>

      </tr>
    <?php } ?>
    <tbody></br>
        Resultado de tabla categoría
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


<script type="text/javascript">
//insertar caracetrsitica a negocio
    function add_caract(){
   swal({
   title: 'Servicios ',
   html:
   '<div class="col-lg-12"> <form action="serviciosxn_car_insert_fn.php" method="post" name="data">'+
   <?php
                $ejec1 = mysqli_query($conn, $empresa);
                while($fila=mysqli_fetch_array($ejec1)){ ?>               
                '<input type="hidden" name="id" id="id" value="<?php echo $fila["ID_NEGOCIO"]; ?>" '+//obtener solo id
    <?php } ?>
   '<strong class="card-title mb-3">Asignar Servicios a empresa</strong> </br>'+
    '<select class="form-control form-control-sm" textalign="center" required name="car" id="car" placeholder="Ej. Reparación">'+
    '<option value="" ></option>'+
    <?php
    $ejec = mysqli_query($conn, $car2);
    while($fila=mysqli_fetch_array($ejec)){?>
    '<?php echo '<option value="'.$fila["ID_SERVICIOS"].'">'.$fila["SERV_NOMBRE"].'</option>'; ?>'+
    <?php } ?>
    '</select>'+
    '</br>'+
    '<button type="submit"  class="btn btn-success btn-lg btn-block">Agregar</button>'+
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

<script type="text/javascript">
//insertar caracetrsitica a negocio
    function add_exp(){
   swal({
   title: 'Exposicion ',
   html:
   '<div class="col-lg-12"> <form action="exposicionxn_insert_fn.php" method="post" name="data">'+
   <?php
                $ejec1 = mysqli_query($conn, $empresa);
                while($fila=mysqli_fetch_array($ejec1)){ ?>               
                '<input type="hidden" name="id" id="id" value="<?php echo $fila["ID_NEGOCIO"]; ?>" '+//obtener solo id
    <?php } ?>
   '<strong class="card-title mb-3">Asignar exposicion a empresa</strong> </br>'+
    '<select class="form-control form-control-sm" textalign="center" required name="exp" id="exp" placeholder="Ej. Reparación">'+
    '<option value="" ></option>'+
    <?php
    $ejec = mysqli_query($conn, $exp);
    while($fila=mysqli_fetch_array($ejec)){?>
    '<?php echo '<option value="'.$fila["ID_EXPOSICION"].'">'.$fila["EXP_NOMBRE"].'</option>'; ?>'+
    <?php } ?>
    '</select>'+
    '</br>'+
    '<button type="submit"  class="btn btn-success btn-lg btn-block">Agregar</button>'+
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

<script type="text/javascript">
//ventana de nuevo cliente
    function update_car(id){
   swal({
   title: 'Características ',
   html:
   '<div class="col-lg-12"> <form action="serviciosxn_update_fn.php" method="post" name="data">'+
   '<input  type="hidden" name="id_car" id="id_car" readonly  class="form-control border-input maxlength="25" required>' +
   '<input  type="hidden" name="car_id" id="car_id" readonly class="form-control border-input maxlength="25" required>' +

   '<input  type="hidden" name="idn" id="idn" readonly class="form-control border-input maxlength="25" required>' +
   '<strong class="card-title mb-3">Asignar caracteristica a empresa</strong> </br>'+
    '<select class="form-control form-control-sm" textalign="center" required name="car" id="car" placeholder="Ej. Reparación">'+
    '<option value="" ></option>'+
    <?php
    $ejec = mysqli_query($conn, $car2);
    while($fila=mysqli_fetch_array($ejec)){?>
    '<?php echo '<option value="'.$fila["ID_SERVICIOS"].'">'.$fila["SERV_NOMBRE"].'</option>'; ?>'+
    <?php } ?>
    '</select>'+
    '<label>Estatus</label>' +
    '<select class="form-control form-control-sm" required textalign="center" name="est" id="est"><option value="" ></option><option value="A" >A</option><option value="B">B</option></select></br>'+   
    '</br>'+
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
        function get_car(id){
        $.ajax({
        // la URL para la petición
        url : 'serviciosxn_get_fn.php',
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
        $("#id_car").val(data.data.id_car);
        $("#car").val(data.data.id_car);
        $("#est").val(data.data.est);
        $("#idn").val(data.data.idn);
        $("#car_id").val(data.data.car_id);


     
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
  <!-- end document-->
