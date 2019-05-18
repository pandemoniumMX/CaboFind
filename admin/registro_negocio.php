<?php

    include'conexion.php';

    $specs="SELECT * FROM  `caracteristicas` ";
    $cliente="SELECT * FROM usuarios where USU_ROLL='Empresa' and USU_STATUS='A' and ID_NEGOCIO IS NULL";


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
    <title>Add</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>

    <script type="text/javascript">

            $(document).ready(function(){
				$("#ramo").click(function () {
                $("#ramo option:selected").each(function () {
				ID_RAMO = $(this).val();
				$.post("registro_negocio_combo_cat.php", { ID_RAMO: ID_RAMO }, function(data){
				$("#categoria").html(data);
                      });
					});
				})
            });

            $(document).ready(function(){
				$("#categoria").click(function () {
                $("#categoria option:selected").each(function () {
                    ID_CATEGORIA = $(this).val();
				$.post("registro_negocio_combo_subcat.php", { ID_CATEGORIA: ID_CATEGORIA }, function(data){
				$("#subcategoria").html(data);
                      });
					});
				})
			});

        </script>


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
            <div class="card-body">
						<form action="registro_negocio_fn.php" method="post" name="data" content="text/html; charset=utf-8" >

            <div id='show-me'>
            <div class="row">
            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Datos</strong>
                                        <small> de la empresa</small>
                                    </div>
                                    <div class="card-body card-block">
																	  <div class="row col-8">
																		 <label for="company" class=" form-control-label">Empresa</label>
																		</div>
																		<div class="row col-8">
                                    <input type="text" name="empresa" id="empresa" required placeholder="Escribe el nombre de la empresa" class="form-control">
                                    </div>
                                    <div class="row col-8">
                                    <label for="vat" class=" form-control-label">Correo</label>
																		</div>
																		<div class="row col-8">
                                    <input type="text" name="correo" required placeholder="Correo" class="form-control">
                                    </div>
                                    <div class="row col-8">
                                    <label for="street" class=" form-control-label">Telefono</label>
																		</div>
																	  <div class="row col-8">
                                    <input type="number" name="tel" id="tel" required placeholder="Teclea telefono" class="form-control">
                                    </div>
																		<div class="row col-8">
                                    <label for="city" class=" form-control-label">Dirección</label>
																	  </div>
																		<div class="row col-8">
                                    <textarea name="direccion" id="direccion" rows="6" required placeholder="Dirección..." class="form-control"></textarea>
                                    </div>
																		<div class="row col-8">
		                                <label for="city" class=" form-control-label">Responsable</label>
																		</div>
																		<div class="row col-8">
		                                <input name="responsable" id="responsable" rows="6" required class="form-control"></input>
																		</div>
																		<div class="row col-8">
																		<label for="postal-code" class=" form-control-label">Breve Descripción de la empresa</label>
																		</div>
																		<div class="row col-8">
                                    <textarea name="descripcion" id="descripcion" rows="6" required placeholder="Descripcion..." class="form-control"></textarea>
                                    </div>
																		<div class="row col-8">
                                    <label for="country" class=" form-control-label">Etiquetas</label>
																		</div>
																		<div class="row col-8">
																		<textarea name="etiquetas" id="etiquetas" rows="5" required placeholder="Escribe sólo las palabras claves relacionado a la empresa..." class="form-control"></textarea>
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
                                      <!--  <div class="form-group">
                                            <label for="company" class=" form-control-label">Ramo de la empresa</label>

                                            <select class="form-control form-control-sm" textalign="center" required name="ramo" id="ramo">
                                            <option value="¿Qué hacer?"></option>
                                            <option value="Bares"></option>
																						<option value="Restaurantes"></option>
																						<option value="Servicios"></option>
																						<option value="Comercios"></option>
                                            </select>

																					</div>-->
																					<?php
																					$cons_cate = "SELECT * FROM categorias;";
																					$ejecutar = mysqli_query($conn, $cons_cate);
																					 ?>

																					<div class="row col-10">
                                            <label for="vat" class=" form-control-label">Selecciona la categoría que pertenece la empresa</label>
																					</div>
																						<div class="row col-10">
                                            <select name="categoria" id="select_cat" required>
																							<option>...</option>
																							<?php
																				    while($fila=mysqli_fetch_array($ejecutar)){
																				        $categoria          = $fila['CAT_NOMBRE'];
                                                $id_cat             = $fila['ID_CATEGORIA'];
																								echo "<option value='$id_cat'>$categoria</option>";
																							}
																								 ?>
																						</select>
																					</div>
																						<div class="row col-10">
                                            <label for="street" class=" form-control-label">Selecciona la subcategoría que pertenece la empresa</label>
																					</div>
																						<div class="row col-10">
																						<select name="subcategoria" id="select_subcat" required>
																						<option value="0">- Select -</option>
																					</select>
																					</div>
																					<div class="row col-10">
                                        <label for="postal-code" class=" form-control-label">Alcance de publicidad</label>
																			</div>
																				<div class="row col-10">
                                        <select  required name="alcance" id="alcance">
																				<option value="" >- Select -</option>
																				<option value="Normal" >Normal</option>
                                        <option value="Alta">Alta</option>
                                        <option value="Maxima">Máxima</option>
                                        </select>
																			</div>
																			<div class="row col-10">
                                    <label for="country" class=" form-control-label">Rango de precios</label>
																	</div>
																	<div class="row col-10">
                                    <select class="form-control form-control-sm" textalign="center" required name="rango" id="rango"><option value="" >
                                    </option><option value="$$" >Hasta $99.00</option>
                                    <option value="$$$">Hasta $999.00</option>
                                    <option value="$$$$">Hasta $9999.00</option>
                                    <option value="$$$$$">Hasta $99999.00</option>
                                    </select>
																	</div>
																	<div class="row col-10">
                                    <label>Fecha límite de exposicion</label>
																	</div>
																	<div class="row col-10">
                                    <input type="date" id="expf" name="expf" required class="form-control border-input"></br>
																	</div>
																	<div class="row col-10">
                                    <input class="btn btn-outline-success" type="submit" value="Registrar y continuar">
                                </div>

															</div>
                                </form>
															</div>
														</div>
															</div>
																    <!-- Div que cierra-->



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


    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>

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

    <script type="text/javascript">
  $(document).ready(function ()
   {
     //primero
    $("#watch-me").click(function()
    {
     $("#show-me:hidden").show('slow');
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#watch-me").click(function()
    {
      if($('watch-me').prop('checked')===false)
     {
      $('#show-me').hide();
     }
    });

    //segundo
    $("#see-me").click(function()
    {
      $("#show-me-two:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#see-me").click(function()
    {
      if($('see-me-two').prop('checked')===false)
     {
      $('#show-me-two').hide();
     }
    });

    //tercero
    $("#look-me").click(function()
    {
      $("#show-me-three:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me").click(function()
    {
      if($('see-me-three').prop('checked')===false)
     {
      $('#show-me-three').hide();
     }
    });

    //cuarto
    $("#look-me2").click(function()
    {
      $("#show-me-three2:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me2").click(function()
    {
      if($('see-me-three2').prop('checked')===false)
     {
      $('#show-me-three2').hide();
     }
    });

      //quinto
    $("#look-me3").click(function()
    {
      $("#show-me-three3:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me3").click(function()
    {
      if($('see-me-three3').prop('checked')===false)
     {
      $('#show-me-three3').hide();
     }
    });


    //sexto
    $("#look-me4").click(function()
    {
      $("#show-me-three4:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three4').prop('checked')===false)
     {
      $('#show-me-three4').hide();
     }
    });

    //septimo
    $("#look-me5").click(function()
    {
      $("#show-me-three5:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three4").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three5').prop('checked')===false)
     {
      $('#show-me-three5').hide();
     }
    });


   });


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
