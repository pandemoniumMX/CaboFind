<?php   
include 'conexion.php';


$id = $_POST ['id'];
$nom = $_POST ['nombre'];


$micarpeta = "assets/galeria/empresas/$nom/$id";
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}

$archivo1 = $_FILES['preview']['tmp_name'];
$destino1 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview']['name'];

$archivo2 = $_FILES['preview1']['tmp_name'];
$destino2 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview1']['name'];

$archivo3 = $_FILES['preview2']['tmp_name'];
$destino3 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview2']['name'];

$archivo4 = $_FILES['preview3']['tmp_name'];
$destino4 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview3']['name'];

$archivo5 = $_FILES['preview4']['tmp_name'];
$destino5 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview4']['name'];

$archivo6 = $_FILES['preview5']['tmp_name'];
$destino6 = "assets/galeria/empresas/$nom/$id/". $_FILES['preview5']['name'];



move_uploaded_file($archivo1, $destino1);
move_uploaded_file($archivo2, $destino2);
move_uploaded_file($archivo3, $destino3);
move_uploaded_file($archivo4, $destino4);
move_uploaded_file($archivo5, $destino5);
move_uploaded_file($archivo6, $destino6);


$sql = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino1', 'CARRUSEL', '$id','A');";
$res = $conn->query($sql);

$sql2 = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino2', 'CARRUSEL',  '$id','A');";
$res = $conn->query($sql2);

$sql3 = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino3', 'CARRUSEL', '$id','A');";
$res = $conn->query($sql3);

$sql4 = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino4', 'CONTENIDO',  '$id','A');";
$res = $conn->query($sql4);

$sql5 = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino5', 'CONTENIDO', '$id','A');";
$res = $conn->query($sql5);

$sql6 = "INSERT INTO galeria(GAL_FOTO, GAL_TITULO, ID_NEGOCIO, GAL_ESTATUS)
VALUES ('$destino6', 'CONTENIDO', '$id','A');";
$res = $conn->query($sql6);



?>


<body>
   
   <head>
   
   <!--  Paper Dashboard core CSS    -->
   <link href="css/theme.css" rel="stylesheet" media="all">
   </head>
   <!-- Sweet Alert 2 plugin -->
   <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    
     <script>
     let timerInterval
     swal({
       title: 'Subiendo imagenes',
       html: 'Se cerrara automaticamente en <strong></strong> segundos.',
       timer: 20000,
       onOpen: () => {
         swal.showLoading()
         timerInterval = setInterval(() => {
           swal.getContent().querySelector('strong')
             .textContent = swal.getTimerLeft()
         }, 50000)
   
       },
       onClose: () => {
         clearInterval(timerInterval)
       }
     }).then((result) => {
       if (
         // Read more about handling dismissals
   
         result.dismiss === swal.DismissReason.timer
       ) {
         console.log('I was closed by the timer')
   
      // window.location.href = "almacen.php";
       }
     });
     </script>
      <?php
   echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($id), "','_self')</script>";

   
   
   ?>
   </body>
    