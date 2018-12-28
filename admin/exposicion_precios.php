<?php	
    include'conexion.php';
    $exposicion ="SELECT n.ID_NEGOCIO, n.NEG_NOMBRE, n.NEG_RAZONSOCIAL, e.ID_EXPOSICION, e.EXP_NIVEL, e.EXP_FECHA_ALTA, e.EXP_FECHA_CADUCIDAD
    FROM   negocios  n, exposicion e
    WHERE n.ID_NEGOCIO = e.ID_NEGOCIO ";
   


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Exposición y rango de precios</title>

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
                                <i class="fas fa-tachometer-alt"></i>Empresas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="registro negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
                                    <a href="index2.html">Modificar empresa</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="categorias.php">
                                <i class="fas fa-chart-bar"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Caracteristicas</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Menú de precios</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Exposición y precios</a>
                        </li>  
                        <li>                     
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Galería</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Reseñas</a>                         
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Usuarios</a>                           
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
                                <i class="fas fa-tachometer-alt"></i>Empresas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="registro_negocio.php">Nuevo registro empresa</a>
                                </li>
                                <li>
                                    <a href="index2.html">Modificar empresa</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li >
                            <a href="categorias.php">
                                <i class="fas fa-chart-bar"></i>Categorias</a>
                        </li>
                        <li>
                        <a href="caracteristicas.php">
                                <i class="fas fa-table"></i>Caracteristicas</a>
                        </li>
                        <li>
                        <a href="menu_precios.php">
                                <i class="far fa-check-square"></i>Menú de precios</a>
                        </li>
                        <li class="active">
                            <a href="exposicion_precios.php">
                                <i class="fas fa-calendar-alt"></i>Exposición y precios</a>
                        </li>  
                        <li>                     
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Galería</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Reseñas</a>                         
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Usuarios</a>                           
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
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
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
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="card">
                                    <div class="card-header">
                                        <strong>Alcance de exposición y rango de precios del negocio </strong>
                                      
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-success" id="watch-me">Exposición</button>
                                        <button type="button" class="btn btn-primary" id="see-me">Rango de precios</button>
                                    </div>
                                </div>
                                            
                    <div id='show-me'>

                            <table id="a-tables" class="table table-hover table-dark table-responsive">
                            <thead>

                            <th data-field="id">Nombre</th>
                            <th data-field="fecha" data-sortable="true">Razón</th>
                            <th data-field="fecha" data-sortable="true">Nivel</th>
                            <th data-field="estatus" data-sortable="true">Fecha alta</th>
                            <th data-field="estatus" data-sortable="true">Fecha caducidad</th>
                            <th class="disabled-sorting">Acción</th>

                            </thead>
                            <?php
                            $ejecutar = mysqli_query($conn, $exposicion);
                            while($fila=mysqli_fetch_array($ejecutar)){
                            $nombre          = $fila['NEG_NOMBRE'];
                            $razon          = $fila['NEG_RAZONSOCIAL'];    
                            $nom           = $fila['EXP_NIVEL'];
                            $ape          = $fila['EXP_FECHA_ALTA'];
                            $dir          = $fila['EXP_FECHA_CADUCIDAD'];


                            ?>
                                <tr>
                                    <td width="8%"><?php echo $nombre ?></td>
                                    <td width="14%"><?php echo $razon ?></td>
                                    <td width="14%"><?php echo $nom ?></td>
                                    <td width="14%"><?php echo $ape ?></td>
                                    <td width="14%"><?php echo $dir ?></td>
                                    <td width="14%">
                                    <?php
                                    
                                ?>

                            </tr>
                            <?php } ?>
                            <tbody></br>
                            Resultado de tabla exposición
                            </tbody>
                            </table>

                    </div>               

                    <div id='show-me-two' style='display:none; border:2px solid #ccc'>

                        <table id="a-tables2" class="table table-hover table-dark table-responsive">
                        <thead>

                        <th data-field="id">Nombre</th>
                        <th data-field="fecha" data-sortable="true">Razón</th>
                        <th data-field="fecha" data-sortable="true">Nivel</th>
                        <th data-field="estatus" data-sortable="true">Fecha alta</th>
                        <th data-field="estatus" data-sortable="true">Fecha caducidad</th>
                        <th class="disabled-sorting">Acción</th>

                        </thead>
                        <?php
                        $ejecutar = mysqli_query($conn, $exposicion);
                        while($fila=mysqli_fetch_array($ejecutar)){
                        $nombre          = $fila['NEG_NOMBRE'];
                        $razon          = $fila['NEG_RAZONSOCIAL'];    
                        $nom           = $fila['EXP_NIVEL'];
                        $ape          = $fila['EXP_FECHA_ALTA'];
                        $dir          = $fila['EXP_FECHA_CADUCIDAD'];


                        ?>
                            <tr>
                                <td width="8%"><?php echo $nombre ?></td>
                                <td width="14%"><?php echo $razon ?></td>
                                <td width="14%"><?php echo $nom ?></td>
                                <td width="14%"><?php echo $ape ?></td>
                                <td width="14%"><?php echo $dir ?></td>
                                <td width="14%">
                                <?php
                                
                            ?>

                        </tr>
                        <?php } ?>
                        <tbody></br>
                        Resultado de tabla rango de precios
                        </tbody>
                        </table>

                    </div>   


            </div>
        </div>

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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#a-tables').DataTable();</script>

    
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>

    

    <script>
            $(document).ready(function() {
                $('#a-tables2').DataTable();
                $('#tabla4').DataTable();
                $('#tabla5').DataTable();
            } );
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

</body>

</html>
<!-- end document-->
