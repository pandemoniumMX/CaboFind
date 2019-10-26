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
  


   
    
    $cliente="SELECT * FROM usuarios where USU_ROLL='Empresa' and USU_STATUS='A' ";
    

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
  <link href="vendor/font-awesome-5/css/fontawesome.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/all.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/all.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome.min.css" rel="stylesheet" media="all">

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
                <!-- fin modal
                <a href="galeria.php">
                  <i class="fas fa-shopping-basket"></i>
                  <span class="bot-line"></span>Galeria</a>
              </li>
              -->
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
                <ul class="header3-sub-list list-unstyled">
                 
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
                    <div class="container-fluid">
                    <div class="card">

                      <div class="card-header">
                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#largeModal">
                        Agregar negocio
                        </button>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive table--no-card m-b-30">
                              <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                      <tr>
                                          <th>id</th>
                                          <th>Nombre</th>
                                          <th>Descripcion</th>
                                          <th>Telefono</th>
                                          <th class="text-right">Correo</th>
                                          <th class="text-right">Responsable</th>
                                          <th class="text-right">Estatus</th>
                                          <th class="text-right">Acción</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $public = "SELECT *, SUBSTRING(n.NEG_DESCRIPCION, 1, 10) FROM negocios n                                    ";
                                    $ejecutar = mysqli_query($conn, $public);

                                  while($fila=mysqli_fetch_array($ejecutar)){
                                      $id_neg       = $fila['ID_NEGOCIO'];
                                      $neg_nom            = $fila['NEG_NOMBRE'];
                                      $neg_desc   = $fila['SUBSTRING(n.NEG_DESCRIPCION, 1, 10)'];
                                      $neg_tel   = $fila['NEG_TEL'];
                                      $neg_correo   = $fila['NEG_CORREO'];
                                      $neg_resp   = $fila['NEG_RESPONSABLE'];
                                      $neg_status   = $fila['NEG_ESTATUS'];

                                     ?>
                                     <tr>
                                         <td><?php echo $id_neg ?></td>
                                         <td><?php echo $neg_nom ?></td>
                                         <td><?php echo $neg_desc ?></td>
                                         <td><?php echo $neg_tel ?></td>
                                         <td><?php echo $neg_correo ?></td>
                                         <td><?php echo $neg_resp ?></td>
                                         <td><?php echo $neg_status ?></td>
                                         <td class="text-right">
                                         <!-- Modal start 
                                           <div class="table-data-feature">
                                             <button  data-toggle="tooltip" onclick="window.location.href='galeria.php?id=<?php echo $id_neg ?>'" data-original-title="Galeria">
                                             <i class='btn-sm btn-success fa fa-image'></i>
                                          </button>
                                           <button  data-toggle="tooltip" data-placement="top" onclick="editar_emp(<?php echo $id_neg ?>),editar_mod(<?php echo $id_neg ?>)"   data-original-title="Editar">
                                           <i class='btn-sm btn-secondary fa fa-edit'></i>
                                           </button>                                        
                                        <button data-toggle="tooltip" onclick="window.location.href='caracteristicasxn.php?id=<?php echo $id_neg ?>'" data-target="#top" data-original-title="Caracteristicas">
                                        <i class='btn-sm btn-primary fa fa-tasks'></i>
                                        </button>
                                        <button data-toggle="tooltip" onclick="window.location.href='serviciosxn.php?id=<?php echo $id_neg ?>'" data-target="#top" data-original-title="Servicios">
                                          <i class="btn-sm btn-warning fa fa-bell"></i>
                                        </button>
                                        <button  data-toggle="tooltip" onclick="window.location.href='estadisticas_xn.php?id=<?php echo $id_neg ?>'" data-target="#top" data-original-title="Estadisticas">
                                          <i class="btn-sm btn-info fa fa-eye"></i>
                                        </button>
                                        <button onclick="borrar_emp(<?php echo $id_neg ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Borrar">
                                        <i class='btn-sm btn-danger fa fa-trash'></i>
                                        </button>
-->

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
    							<h5 class="modal-title" id="largeModalLabel">Nuevo negocio</h5>
    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    								<span aria-hidden="true">×</span>
    							</button>
    						</div>
    						<div class="modal-body">
                  <!-- contenido del modal -->

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
                                <input type="text" id="empresa" name="empresa" required  placeholder="Nombre negocio" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input type="email" id="correo" name="correo" required placeholder="Correo" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="number" id="telefono" name="telefono" required placeholder="telefono negocio" class="form-control">
                                            </div>
                                        </div>
          </div>
          <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="number" id="telefono_res" name="telefono_res" required placeholder="telefono responsable" class="form-control">
                                            </div>
                                        </div>
          </div>
          <div class="row form-group">
                      <div class="col col-md-12">
                          <div class="input-group">
                              <div class="input-group-addon">
                                  <i class="fa fa-home"></i>
                              </div>
                              <input type="text" id="direccion" name="direccion" required onkeypress="return validar(event)" placeholder="direccion" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row form-group">
                              <div class="col col-md-12">
                                  <div class="input-group">
                                      <div class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                      </div>
                                      <input type="text" id="responsable" required onkeypress="return validar(event)" name="responsable" placeholder="responsable" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-12">
                                  <div class="input-group">
                                      <div class="input-group-addon">
                                      <i class="fa fa-location-arrow"></i>
                                      </div>
                                      <input type="text" required id="descripcion" name="descripcion" placeholder="descripcion" class="form-control">
                                  </div>
                              </div>
                          </div>

                          <div class="row form-group">
                                      <div class="col col-md-12">
                                          <div class="input-group">
                                              <div class="input-group-addon">
                                              <i class="fa fa-location-arrow"></i>
                                              </div>
                                              <input type="text" required id="descripcion_ing" name="descripcion_ing" placeholder="descripcion inglés" class="form-control">
                                          </div>
                                      </div>
                          </div>

                          <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </div>
                                                <input type="text" required id="horario" name="horario" placeholder="Horario " class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </div>
                                                <input type="text" required id="horario_ing" name="horario_ing" placeholder="Horario inglés" class="form-control">
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
                                                  echo '<option value="'.$fila["ID_CATEGORIA"].'">'.$fila["CAT_NOMBRE"].'</option>';
                                                $cons_cate = "SELECT ID_CATEGORIA,CAT_NOMBRE FROM categorias;";
                                                $ejecutar = mysqli_query($conn, $cons_cate);

                                              while($fila=mysqli_fetch_array($ejecutar)){                                                 
                                                  echo '<option value="'.$fila["ID_CATEGORIA"].'">'.$fila["CAT_NOMBRE"].'</option>';
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
                          <input type="text" id="map" name="map" required placeholder="URL Google Maps" onkeypress="return validar(event)" class="form-control">
                            </div>
                              </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                <i class="fa fa-location-arrow"></i>
                                                </div>
                                                <input type="text" id="map_ios" name="map_ios" required placeholder="URL Apple Maps" onkeypress="return validar(event)" class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <select required id="ciudad" name="ciudad"  class="form-control" >
                                                <option disabled selected>Selecciona ciudad</option>
                                                <option value="Cabo San Lucas">Cabo San Lucas</option>
                                                <option value="San José del Cabo">San José del Cabo</option>
                                                <option value="Los Barriles">Los Barriles</option>     
                                                <option value="Miraflores">Miraflores</option>                                                  
                                             
                                                </select>
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                <i class="fab fa-facebook"></i>
                                                </div>
                                                <input type="text" id="facebook" required name="facebook" placeholder="facebook" class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                                <input type="text" id="instagram" required name="instagram" placeholder="instagram" class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fab fa-chrome"></i>
                                                </div>
                                                <input type="text" id="web" required name="web" placeholder="pagina web" class="form-control">
                                            </div>
                                        </div>
                            </div>
                            
                            

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <input type="text" id="etiquetas_esp" required name="etiquetas_esp" placeholder="Etiquetas español" class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <input type="text" id="etiquetas_ing" required name="etiquetas_ing" placeholder="Etiquetas inglés" class="form-control">
                                            </div>
                                        </div>
                            </div>


                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </div>
                                                <select required id="estatus" name="estatus" class="form-control" >
                                                <option disabled selected>Estatus</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>                                                  
                                                </select>
                                            </div>
                                        </div>
                            </div>   
                            
                            
                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                </div>
                                                <select required id="ingles" name="ingles" class="form-control" >
                                                <option disabled selected>¿Hablan inglés?</option>
                                                <option value="True">SI</option>
                                                <option value="False">NO</option>                                                  
                                                </select>
                                            </div>
                                        </div>
                            </div> 


                                                </div>
                                                  </div>
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
<!-- modal end -->

<!-- START MODAL GALERIA-->
<div class="modal fade" id="Modaltags" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallModalLabel"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
              <div id="formtags" class="form-check">

              </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
<!-- END MODAL GALERIA-->



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

  <script>
  $(document).ready(function(){
  $('#Modaltags').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('id negocio: ' + recipient)
  $('#idnegocio').val(recipient);
var ids = recipient;
  $.ajax({
      url: 'negocio_carac_fn.php',
      type: 'POST',
      data: "id="+ids,
      dataType: 'JSON',
      success: function(response){
        document.getElementById("formtags").innerHTML = "";
          var len = response.length;
          for(var i=0; i<len; i++){
              var id = response[i].id;
              var nombre = response[i].nombre;


              var tr_str = "<div class='checkbox'>" +
                  "<label for='checkbox1' class='form-check-label'>"+
                  "<input type='checkbox' id='checkbox1' name='checkbox1' value='" + (i+1) + "'" +
                  "class='form-check-input'>" + nombre + "</label> " +
                  "</div>";

              $("#formtags").append(tr_str);
          }

      }
  });
})
});
  </script>

  <!-- onkeypress="return validar(event)"-->
  <script>
  function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
  // dejar la línea de patron que se necesite y borrar el resto
  patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
  //patron = /\d/; // Solo acepta números
  //patron = /[\w\s]/; // Acepta números y letras
  //patron = /\D/; // No acepta números
  //

  te = String.fromCharCode(tecla);
  return patron.test(te);
  }
  </script>
  <!-- onkeypress="return validar(event)"-->
  <script>
  function validar2(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
  // dejar la línea de patron que se necesite y borrar el resto
  //patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
  //patron = /\d/; // Solo acepta números
  //patron = /\w/; // Acepta números y letras
  patron = /[\w\s]/;// Acepta números y letras y espacio
  //patron = /\D/; // No acepta números
  //

  te = String.fromCharCode(tecla);
  return patron.test(te);
  }
  </script>

<!-- ajax submit modal-->
<script>
function submitContactForm(){
                $.ajax({
                 url: 'negocio_nuevo_fn.php',
                 type: 'POST',
                 data: $("#registerSubmit").serialize(),
                 dataType: 'json'
               })
               .done(function(response){
                 swal('Agregado exitosamente!', response.message, response.status).then(function(){
                  window.location.href='galeria.php?id=<?php echo $id_plus = $id_neg + 1; ?>'
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
          url: 'negocio_delete_fn.php',
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

function sumid()
{
  var id =$id_neg;
 
  suma =parseInt(id)+parseInt(1);

  $id_plus = suma;
  

}
</script>

  <!-- Llenar campos editar negocio-->

<script type="text/javascript">
function editar_mod(id){
  $.ajax({
      // la URL para la petición
      url : 'negocios_get_fn.php',
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
        $("#nombre").val(data.data.nombre);
        $("#correo").val(data.data.correo);
        $("#telefono").val(data.data.telefono);
        $("#telefono_res").val(data.data.telefono_res);
        $("#direccion").val(data.data.direccion);
        $("#nombre_res").val(data.data.nombre_res);
        $("#descripcion_esp").val(data.data.descripcion_esp);
        $("#descripcion_ing").val(data.data.descripcion_ing);
        $("#maps").val(data.data.maps);
        $("#ciudad").val(data.data.ciudad);
        $("#facebook").val(data.data.facebook);
        $("#instagram").val(data.data.instagram);
        $("#web").val(data.data.web);
        $("#horario_esp").val(data.data.horario_esp);
        $("#horario_ing").val(data.data.horario_ing);
        $("#estatus").val(data.data.estatus);
        $("#subcategoria").val(data.data.subcategoria);   
        $("#etiquetas_esp").val(data.data.etiquetas_esp);
        $("#etiquetas_ing").val(data.data.etiquetas_ing);
    

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

<script type="text/javascript">
//ventana actualizar cliente
function editar_emp(id){


swal({
title: 'Actualizar negocio',
html:
'<div class="col-lg-12"> <form action="recepcion_cliente_actualizar.php" method="post" name="data">'+
'<input name="idneg" type="text" id="idneg" value="'+id+'" class="form-control border-input" readonly>' +
//inicia fila 1
'<div class="row">'+
'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Nombre negocio</label>'+
        '<input type="text" name="nombre" id="nombre" class="form-control border-input">'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Correo negocio</label>'+
        '<input name="correo"  id="correo" type="mail"  required  class="form-control border-input">'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Telefono negocio</label>'+

        '<input name="telefono"  id="telefono" type="number"   required  class="form-control border-input">'+


'</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Telefono responsable</label>'+

        '<input name="telefono_res"  id="telefono_res" type="number"   required  class="form-control border-input">'+


'</div>'+
'</div>'+
'</div>'+

//termina fila 1

//inicia fila 2
'<div class="row">'+
'<div class="col-md-3">'+
  '<div class="form-group">'+
  '<label>Direccion negocio</label>'+
  '<textarea type="text" name="direccion" id="direccion" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Nombre Responsable</label>'+
        '<input name="nombre_res"  id="nombre_res" type="text" required  class="form-control border-input">'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Descripcion español</label>'+
        '<textarea type="text" name="descripcion_esp" id="descripcion_esp" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Descripcion inglés</label>'+
        '<textarea type="text" name="descripcion_ing" id="descripcion_ing" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+


'</div>'+
'</div>'+
'</div>'+

//termina fila 2
'<h5>Redes sociales</h5>'+

//inicia fila 3
'<div class="row">'+
'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>URL Maps</label>'+
        '<input type="text" name="maps" id="maps" type="text"  class="form-control border-input">'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Ciudad</label>'+
        '<select required id="ciudad" name="ciudad"  class="form-control" >'+
         '<option disabled selected>Selecciona ciudad</option>'+
          '<option value="Cabo San Lucas">Cabo San Lucas</option>'+
          '<option value="San José del Cabo">San José del Cabo</option>'+
          '<option value="Los Barriles">Los Barriles</option>'+    
          '<option value="Corredor Turístico">Corredor Turístico</option>'+                                            
                                        
        '</select>'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Facebook</label>'+
        '<input name="facebook"  id="facebook" type="text"  class="form-control border-input">'+


'</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Instagram</label>'+
        '<input name="instagram"  id="instagram" type="text" class="form-control border-input">'+
    '</div>'+
'</div>'+
'</div>'+

//termina fila 3
'<h5>Horarios</h5>'+

//inicia fila 4
'<div class="row">'+
'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Pagina web</label>'+
        '<input type="text" name="pagina" id="pagina" require class="form-control border-input">'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Horario esp</label>'+
        '<textarea type="text" name="horario_esp" id="horario_esp" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Horario inglés</label>'+
        '<textarea type="text" name="horario_ing" id="horario_ing" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+


'</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Estatus</label>'+
        '<select class="form-control form-control-sm" text-align="center" required name="estatus" id="estatus"><option value=""></option><option value="A">A</option><option value="B">B</option></select>' +
    '</div>'+
'</div>'+
'</div>'+

//termina fila 4

//inicia fila 5
'<div class="row">'+
'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Categoria</label>'+
        '<select id="select_cat" name="select_cat" class="dropdown-toggle btn btn-primary" onclick="categoria();" type="button">'+
                                                 ' <option>Seleccione</option>'+
                                                <?php
                                                $cons_cate1 = "SELECT * FROM categorias;";
                                                $ejecutar = mysqli_query($conn, $cons_cate1);
                                              while($fila=mysqli_fetch_array($ejecutar)){?>
                                                '<?php  echo '<option value="'.$fila["ID_CATEGORIA"].'">'.$fila["CAT_NOMBRE"].'</option>'; ?>'+
                                                <?php } ?>
                                   '  </select>'+
'</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Subcategoria</label>'+
        '<select id="subcategoria" name="subcategoria" class="dropdown-toggle btn btn-primary" onclick="categoria();" type="button">'+
                                                 ' <option>Seleccione</option>'+
                                                <?php
                                                $cons_cate1 = "SELECT * FROM subcategoria;";
                                                $ejecutar = mysqli_query($conn, $cons_cate1);
                                              while($fila=mysqli_fetch_array($ejecutar)){?>
                                                '<?php  echo '<option value="'.$fila["ID_SUBCATEGORIA"].'">'.$fila["SUB_NOMBRE"].'</option>'; ?>'+
                                                <?php } ?>
                                   '  </select>'+
'</div>'+
'</div>'+


'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Etiquetas esp</label>'+
        '<textarea type="text" name="etiquetas_esp" id="etiquetas_esp" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+
    '</div>'+
'</div>'+

'<div class="col-md-3">'+
  '<div class="form-group">'+
        '<label>Etiquetas inglés</label>'+
        '<textarea type="text" name="etiquetas_ing" id="etiquetas_ing" pattern="[A-Za-z0-9 ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+


'</div>'+
'</div>'+

'</div>'+

//inicia fila 6



'<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar negocio</Button>'+
'</form></div>',
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Actualizar solicitud',
cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
showConfirmButton: false,
focusConfirm: false,
customClass: 'swal-wide',
buttonsStyling: false,
reverseButtons: true, allowOutsideClick: false
})
  };

</script>

<style>
.swal-wide{
    width:70% !important;
}
</style>
  </body>

  </html>
  <!-- end document-->


 