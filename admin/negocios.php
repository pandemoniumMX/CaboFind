<?php

    include'conexion.php';

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
                <a href="#">
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
                <a href="#">
                  <i class="fas fa-shopping-basket"></i>
                  <span class="bot-line"></span>Galeria</a>
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
                                           <div class="table-data-feature">
                                             <button class="item" title="tooltip" onclick="window.location.href='galeria.php?id=<?php echo $id_neg ?>'" data-original-title="Edit">
                                               <i class="zmdi zmdi-image"></i>
                                          </button>
                                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button class="item" onclick="borrar_emp(<?php echo $id_neg ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
                                <input type="text" id="empresa" name="empresa" required onkeypress="return validar(event)" placeholder="Nombre negocio" class="form-control">
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
                                                <input type="number" id="telefono" name="telefono" required placeholder="telefono" class="form-control">
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
                                                  <i class="fa fa-pencil-square-o"></i>
                                              </div>
                                              <input type="text" required id="descripcion" name="descripcion" placeholder="descripcion" class="form-control">
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
                          <input type="text" id="map" name="map" required placeholder="URL localizacion" onkeypress="return validar(event)" class="form-control">
                            </div>
                              </div>
                            </div>
                            <div class="row form-group">
                                        <div class="col col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </div>
                                                <input type="text" id="etiquetas" required name="etiquetas" placeholder="etiquetas" class="form-control">
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
<div class="modal fade" id="ModalGaleria" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
              <div class="default-tab">
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-home" aria-selected="true">Todas</a>
													<a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-profile" aria-selected="false">Galeria</a>
													<a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-contact" aria-selected="false">Publicaciones</a>
                          <a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-contact" aria-selected="false">Portada</a>
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-home-tab">
                          <input class="form-group" type="hidden" id="idnegocio"></input>

                          <div class="row form-group">
                            <div class="col-lg-12" id="formgalery">

                            </div>
                          </div>

												</div>
												<div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-profile-tab">

												</div>
												<div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-contact-tab">

												</div>
                        <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-contact-tab">

												</div>
											</div>

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
  $('#ModalGaleria').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('id negocio: ' + recipient)
  $('#idnegocio').val(recipient);
var ids = recipient;
  $.ajax({
      url: 'negocios_galeria_fn.php',
      type: 'POST',
      data: "id="+ids,
      dataType: 'JSON',
      success: function(response){
        document.getElementById("formgalery").innerHTML = "";
          var len = response.length;
          for(var i=0; i<len; i++){
              var id = response[i].id;
              var foto = response[i].foto;


              var tr_str = "<div class='col-md-3'>" +
                  "<img class='img-responsive' alt='" + (i+1) + "' " +
                  "src='../" + foto + "'</img> " +
                  "</div>";

              $("#formgalery").append(tr_str);
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




  </body>

  </html>
  <!-- end document-->
