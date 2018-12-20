<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro de empresa</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#wizard_verticle').smartWizard({
        // Properties
          selected: 0,  // Selected Step, 0 = first step
          keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
          enableAllSteps: true,  // Enable/Disable all steps on first load
          transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
          contentURL:null, // specifying content url enables ajax content loading
          contentURLData:null, // override ajax query parameters
          contentCache:true, // cache step contents, if false content is fetched always from ajax url
          cycleSteps: false, // cycle step navigation
          enableFinishButton: false, // makes finish button enabled always
      	  hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead
          errorSteps:[],    // array of step numbers to highlighting as error steps
          labelNext:'Next', // label for Next button
          labelPrevious:'Previous', // label for Previous button
          labelFinish:'Finish',  // label for Finish button
          noForwardJumping:false,
        // Events
          onLeaveStep: null, // triggers when leaving a step
          onShowStep: null,  // triggers when showing a step
          onFinish: onFinishCallback  // triggers when Finish button is clicked
      });
      function onFinishCallback(objs, context){
        $('form').submit();
        };
        })
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Administrador CaboFind</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Dashboard1</a></li>
                      <li><a href="#">Dashboard2</a></li>
                      <li><a href="#">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pencil-square-o"></i> Registros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="registro_negocio.php">Registro de negocio</a></li>
                      <li><a href="#">Registro de usuarios</a></li>

                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registro de negocio</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">


                    <h2>Formulario</h2>
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-33">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-44">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-55">
                            <span class="step_no">5</span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-11">
                        <h2 class="StepTitle">Paso 1</h2>
                        <form class="form-horizontal form-label-left" method="post" action="registro_negocio_add.php">

                          <span class="section">Información de la empresa</span>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="name" placeholder="" required="required" type="text">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razon">Razón social <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="razons" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="razons" placeholder="" required="required" type="text">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Número de tel. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="number" name="number" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resp">Dirección <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="dire" type="text" name="dire" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rfc">RFC <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="rfc" name="rfc" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desc">Descripción <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="desc" type="text" name="desc" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resp">Responsable <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="resp" type="text" name="resp" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="cate" type="hidden" name="cate" class="optional form-control col-md-7 col-xs-12"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="ramo" type="hidden" name="ramo" class="optional form-control col-md-7 col-xs-12"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="expo" type="hidden" name="expo" class="optional form-control col-md-7 col-xs-12"/>
                            </div>
                          </form>

                      </div>
                          <!-- end step 1-->
                      <div id="step-22">
                        <h2 class="StepTitle">Paso 2 rama</h2>
                        <p>Escoja la rama dónde se encuentra el negocio para facilitar que los clientes la encuentren.
                        </p>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="form-group">
                              <p>
                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="activi" class="flat" name="ramos" value="1"/>
                                Actividades: Visita al arco, guias turisticas, delfines, etc.
                                </label>
                                </div>

                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="comida" class="flat"  name="ramos" value="2" />
                                Comida: Mexicana, italiana, china, etc.
                                </label>
                                </div>

                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="comercio" class="flat" name="ramos"  value="3" />
                                Comercio: Tienda de ropa, salon de belleza, super, etc.
                                </label>
                                </div>

                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="entretenimiento" class="flat" name="ramos" value="4" />
                                Entretenimiento: Teatro, museos, conciertos etc.
                                </label>
                                </div>

                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="servicio" class="flat" name="ramos" value="5" />
                                Servicios: Medicos, tecnicos, taxi, etc.
                                </label>
                                </div>

                                <div class="checkbox" >
                                <label >
                                <input type="radio" id="nightclub" class="flat" name="ramos" value="6" />
                                NightClub: Bar, Sportbar, NightMen, etc.
                                </label>
                                </div>
                                </p>
                        </div>
                      </div>

                      </div>
                          <!-- end step 2-->
                      <div id="step-33">
                        <h2 class="StepTitle">Paso 3 Categoria</h2>
                        <p>Categoria del negocio en base a lo seleccionado en el paso anterior te mostramos las siguientes categorias:</p>
                          <div class="col-md-4 col-sm-4">
                              <select id="select"  class="form-control" required>
                                <option value="1">seleccione</option>  </select>

                          <script>
                              //mandar valor a input hide
                            $("#select").change(function(){
                          var e = document.getElementById("select");
                          var sel = e.options[e.selectedIndex].value;
                          document.getElementById("cate").value = sel;
                          });
                          </script>


                      </div>
                      </div>
                          <!-- end step 3-->
                      <div id="step-44">
                        <h2 class="StepTitle">Paso 4 Etiquetas</h2>
                        <p>Selecciona las etiquetas dependiendo el ramo:</p>
                          <div class="col-md-9 col-sm-9">
                              <input class="form-group" name="eti" id="etiq" readonly></input>
                              <!-- panel actividades -->
                            <div id="pan_act" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac1" checked value="Paseo al arco" data-parsley-mincheck="2" required class="flat" /> Paseo al arco
                                <br />
                                <input type="checkbox" name="carac[]" id="carac2" value="Paseo a caballo" class="flat" /> Paseo a caballo
                                <br />
                                <input type="checkbox" name="carac[]" id="carac3" value="Paseo a camello" class="flat" /> Paseo a camello
                                <br />
                                <input type="checkbox" name="carac[]" id="carac4" value="Paseo cuatrimoto" class="flat" /> Paseo cuatrimoto
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac5" value="Buggy" data-parsley-mincheck="2" required class="flat" /> Buggy
                                <br />
                                <input type="checkbox" name="carac[]" id="carac6" value="Paseo al arco" class="flat" /> Paseo al arco
                                <br />
                                <input type="checkbox" name="carac[]" id="carac7" value="Buceo" class="flat" /> Buceo
                                <br />
                                <input type="checkbox" name="carac[]" id="carac8" value="Kayaks" class="flat" /> Kayak's
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac9" value="Salto en paracaidas" data-parsley-mincheck="2" required class="flat" /> Salto en paracaidas
                                <br />
                                <input type="checkbox" name="carac[]" id="carac10" value="Carro volador" class="flat" /> Carro volador
                                <br />
                                <input type="checkbox" name="carac[]" id="carac11" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->

                            </div>
                            <!-- panel comida -->
                            <div id="pan_comida" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac12" value="Desayunos" data-parsley-mincheck="2" required class="flat" /> Desayunos
                                <br />
                                <input type="checkbox" name="carac[]" id="carac13" value="Cenas" class="flat" /> Cenas
                                <br />
                                <input type="checkbox" name="carac[]" id="carac14" value="Comidas" class="flat" /> Comidas
                                <
                                <input type="checkbox" name="carac[]" id="carac15" value="Buffet" class="flat" /> Buffet
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac16" value="" data-parsley-mincheck="2" required class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac17" value="Paseo al arco" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac18" value="Buceo" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac19" value="Kayaks" class="flat" /> otro
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac20" value="Salto en paracaidas" data-parsley-mincheck="2" required class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac21" value="Carro volador" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac22" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->
                            </div>
                            <!-- panel entretenimiento -->
                            <div id="pan_entre" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac23" value="Comida" data-parsley-mincheck="2" required class="flat" /> Comida
                                <br />
                                <input type="checkbox" name="carac[]" id="carac24" value="snack" class="flat" /> snack
                                <br />
                                <input type="checkbox" name="carac[]" id="carac25" value="Solo adultos" class="flat" /> Solo adultos
                                <br />
                                <input type="checkbox" name="carac[]" id="carac26" value="Musica en vivo" class="flat" /> Musica en vivo
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac27" value="Solo para mujeres" data-parsley-mincheck="2" required class="flat" /> Solo para mujeres
                                <br />
                                <input type="checkbox" name="carac[]" id="carac28" value="Paseo al arco" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac29" value="Buceo" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac30" value="Kayaks" class="flat" /> otro
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac31" value="Salto en paracaidas" data-parsley-mincheck="2" required class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac32" value="Carro volador" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac33" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->
                            </div>
                            <!-- panel servicios -->
                            <div id="pan_serv" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac34" value="Compra y venta" data-parsley-mincheck="2" required class="flat" /> Compra y venta
                                <br />
                                <input type="checkbox" name="carac[]" id="carac35" value="especializado" class="flat" /> especializado
                                <br />
                                <input type="checkbox" name="carac[]" id="carac36" value="Dentista" class="flat" /> Dentista
                                <br />
                                <input type="checkbox" name="carac[]" id="carac37" value="Doctor gral" class="flat" /> Doctor gral
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac38" value="Servicio 24hrs" data-parsley-mincheck="2" required class="flat" /> Servicio 24hrs
                                <br />
                                <input type="checkbox" name="carac[]" id="carac39" value="otro" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac40" value="Buceo" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac41" value="Kayaks" class="flat" /> otro
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac42" value="Salto en paracaidas" data-parsley-mincheck="2" required class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac43" value="Carro volador" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac44" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->
                            </div>
                            <!-- panel nightclub -->
                            <div id="pan_night" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac45" value="Paseo al arco" data-parsley-mincheck="2" required class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac46" value="Paseo a caballo" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac47" value="Paseo a camello" class="flat" /> otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac48" value="Paseo cuatrimoto" class="flat" /> otro
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac49" value="Buggy" data-parsley-mincheck="2" required class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac50" value="Paseo al arco" class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac51" value="Buceo" class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac52" value="Kayaks" class="flat" />otro
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac53" value="Salto en paracaidas" data-parsley-mincheck="2" required class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac54" value="Carro volador" class="flat" />otro
                                <br />
                                <input type="checkbox" name="carac[]" id="carac55" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->
                            </div>
                            <!-- panel comercios -->
                            <div id="pan_comerc" style='display:none; '>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac56" value="Compra y venta" data-parsley-mincheck="2" required class="flat" /> Compra y venta
                                <br />
                                <input type="checkbox" name="carac[]" id="carac57" value="Damas" class="flat" /> Damas
                                <br />
                                <input type="checkbox" name="carac[]" id="carac58" value="Caballeros" class="flat" /> Caballeros
                                <br />
                                <input type="checkbox" name="carac[]" id="carac59" value="Bebes" class="flat" /> Bebes
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac60" value="Tallas grandes" data-parsley-mincheck="2" required class="flat" /> Tallas grandes
                                <br />
                                <input type="checkbox" name="carac[]" id="carac61" value="Vestidos de novia" class="flat" /> Vestidos de novia
                                <br />
                                <input type="checkbox" name="carac[]" id="carac62" value="Vestidos de xv" class="flat" /> Vestidos de xv
                                <br />
                                <input type="checkbox" name="carac[]" id="carac63" value="Trajes de vestir" class="flat" /> Trajes de vestir
                                <br />
                              </div>
                              <div class="col-md-4 col-sm-4">
                              <p style="padding: 5px;">
                                <input type="checkbox" name="carac[]" id="carac64" value="Servicio 24hrs" data-parsley-mincheck="2" required class="flat" /> Servicio 24hrs
                                <br />
                                <input type="checkbox" name="carac[]" id="carac65" value="Sistema de apartado" class="flat" /> Sistema de apartado
                                <br />
                                <input type="checkbox" name="carac[]" id="carac66" value="otro" class="flat" /> otro
                                <br />
                              </div>
                              <!--fin div de columnas -->
                            </div>
                      </div>

                      </div>
                          <!-- end step 4-->
                      <div id="step-55">
                        <h2 class="StepTitle">Paso 4 exposición</h2>
                        <p>Selecciona la exposición que desea el cliente para la publicidad de su negocio.
                        </p>
                        <div class="col-md-12 col-sm-12">
                            <!-- primer panel-->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Alta <small>$$$</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content text-center">
                                <label>
                                  <input type="radio" name="expos" id="alta" value="3"/>
                                La exposición alta conduce a que el negocio siempre este a la vista del cliente
                              </label>
                              </div>
                            </div>
                          </div>
                          <!-- segundo panel-->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Media  <small>$$$</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content text-center">
                                <label>
                                  <input type="radio" name="expos" id="media" value="2"/>
                                La exposición alta conduce a que el negocio siempre este a la vista del cliente
                              </label>
                              </div>
                            </div>
                          </div>
                          <!-- tercer panel-->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Baja <small>$$$</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content text-center">
                                <label>
                                  <input type="radio" name="expos" id="baja" value="1"/>
                                La exposición alta conduce a que el negocio siempre este a la vista del cliente
                              </label>
                              </div>
                            </div>
                          </div>

                          <script>
                          //mandar valor a input hide
                          $(document).ready(function(){
                            $("#alta").change(function(){
                                if(this.checked) {
                            var check = $("#alta:checked"). val();
                            document.getElementById("expo").value = check;
                          }});
                          $("#media").change(function(){
                              if(this.checked) {
                          var check = $("#media:checked"). val();
                          document.getElementById("expo").value = check;
                        }});
                        $("#baja").change(function(){
                            if(this.checked) {
                        var check = $("#baja:checked"). val();
                        document.getElementById("expo").value = check;
                      }});});
                              </script>

                  </div>

                      </div>
                      <!-- end step 5-->
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>


<!-- script para cambio de checkbox -->
<script>
$(document).ready(function()
 {

  $("#activi").change(function()
    {
      if(this.checked) {
document.getElementById("select").options.length = 0;
$("#select").append(new Option("Seleccione...", ""));
  $("#select").append(new Option("Actividades terrestres", "1"));
  $("#select").append(new Option("Actividades marinas", "2"));
  $("#select").append(new Option("Actividades áreas", "3"));
  var check = $("#activi:checked"). val();
  document.getElementById("ramo").value = check;
  document.getElementById("etiq").value = "actividades";
  $("#pan_act").show();
  $("#pan_comida").hide();
  $("#pan_entre").hide();
  $("#pan_serv").hide();
  $("#pan_comerc").hide();
  $("#pan_night").hide();
}

    });

    $("#comida").change(function()
      {
        if(this.checked) {
          document.getElementById("select").options.length = 0;
          $("#select").append(new Option("Seleccione...", ""));
    $("#select").append(new Option("Méxicana", "4"));
    $("#select").append(new Option("Italiana", "5"));
    $("#select").append(new Option("China", "6"));
    $("#select").append(new Option("Japonesa", "7"));
    $("#select").append(new Option("Rápida", "8"));
    $("#select").append(new Option("Repostería", "9"));
    var check = $("#comida:checked"). val();
    document.getElementById("ramo").value = check;
    document.getElementById("etiq").value = "comida";
    $("#pan_comida").show();
    $("#pan_act").hide();
    $("#pan_entre").hide();
    $("#pan_serv").hide();
    $("#pan_comerc").hide();
    $("#pan_night").hide();
  }
      });

      $("#servicio").change(function()
        {
          if(this.checked) {
            document.getElementById("select").options.length = 0;
            $("#select").append(new Option("Seleccione...", ""));
      $("#select").append(new Option("Médicos", "10"));
      $("#select").append(new Option("Técnicos", "11"));
      $("#select").append(new Option("Mecanicos", "12"));
      $("#select").append(new Option("Transporte", "13"));
      var check = $("#servicio:checked"). val();
      document.getElementById("ramo").value = check;
      document.getElementById("etiq").value = "servicio";
      $("#pan_serv").show();
      $("#pan_comida").hide();
      $("#pan_entre").hide();
      $("#pan_act").hide();
      $("#pan_comerc").hide();
      $("#pan_night").hide();
    }
        });

        $("#entretenimiento").change(function()
          {
            if(this.checked) {
              document.getElementById("select").options.length = 0;
            $("#select").append(new Option("Seleccione...", ""));
            $("#select").append(new Option("Ciné", "14"));
            $("#select").append(new Option("Teatro", "15"));
            $("#select").append(new Option("Museo", "16"));
            var check = $("#entretenimiento:checked"). val();
            document.getElementById("ramo").value = check;
            document.getElementById("etiq").value = "Entretenimiento";
            $("#pan_entre").show();
            $("#pan_comida").hide();
            $("#pan_act").hide();
            $("#pan_serv").hide();
            $("#pan_comerc").hide();
            $("#pan_night").hide();
          }
          });

          $("#nightclub").change(function()
            {
              if(this.checked) {
                document.getElementById("select").options.length = 0;
        $("#select").append(new Option("Bar", "17"));
        $("#select").append(new Option("SportBar", "18"));
        $("#select").append(new Option("Cantina", "19"));
        $("#select").append(new Option("Puteros", "20"));
        var check = $("#nightclub:checked"). val();
        document.getElementById("ramo").value = check;
        document.getElementById("etiq").value = "nightclub";
        $("#pan_night").show();
        $("#pan_comida").hide();
        $("#pan_entre").hide();
        $("#pan_serv").hide();
        $("#pan_comerc").hide();
        $("#pan_act").hide();
      }
            });

            $("#comercio").change(function()
              {
                if(this.checked) {
                  document.getElementById("select").options.length = 0;
          $("#select").append(new Option("Tienda de ropa", "21"));
          $("#select").append(new Option("Tienda de deporte", "22"));
          $("#select").append(new Option("Salón de belleza", "23"));
          $("#select").append(new Option("Super", "24"));
          var check = $("#comercio:checked"). val();
          document.getElementById("ramo").value = check;
          document.getElementById("etiq").value = "comercio";
          $("#pan_comerc").show();
          $("#pan_comida").hide();
          $("#pan_entre").hide();
          $("#pan_serv").hide();
          $("#pan_act").hide();
          $("#pan_night").hide();
        }
              });
            //terminan las categorias

});
</script>



  </body>
</html>
