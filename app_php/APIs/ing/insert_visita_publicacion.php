<?php
include '../../conn.php';


$response = array();

    $MOD=$_GET['MOD'];
    $BOOT=$_GET['BOOT'];
    $VERSION=$_GET['VERSION'];
    $IDIOMA=$_GET['IDIOMA'];
    $ID=$_GET['ID'];
    $SO=$_GET['SO'];


  $validacion = "SELECT TVP_BOOT FROM trigger_visita_publicacion WHERE TVP_BOOT = '$BOOT' and TVP_VERSION= '$VERSION' and FECHA_TVP=CURDATE() and publicacion_ID_PUBLICACION= '$ID';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


         $sql2 = "INSERT INTO `trigger_visita_publicacion` (FECHA_TVP,IDIOMA_TVP,TVP_BOOT,TVP_VERSION, TVP_MODELO, TVP_SO, publicacion_ID_PUBLICACION) VALUES (CURDATE(),'ing','$BOOT','$VERSION','$MOD','$SO','$ID');";
        $res = $conn->query($sql2);
        
         $sql3 = "UPDATE `publicacion` set PUB_VISITAS = (SELECT COUNT(publicacion_ID_PUBLICACION) from `trigger_visita_publicacion` WHERE publicacion_ID_PUBLICACION='$ID') WHERE ID_PUBLICACION='$ID'";
         $res = $conn->query($sql3);

    if (!$res) {
      $response['status']  = 'error';
$response['message'] = $conn->error;
     }
     else{
       $response['status']  = 'success';
$response['message'] = 'Dispositivo registrado correctamente ...';
     }

   }else{
     $response['status']  = 'error';
$response['message'] = 'Ya existe un dispositivo registrado';
   }
   echo json_encode($response);

?>