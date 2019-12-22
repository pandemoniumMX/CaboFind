<?php
include '../../conn.php';


$response = array();

    $MOD=$_GET['MOD'];
    $BOOT=$_GET['BOOT'];
    $VERSION=$_GET['VERSION'];
    $IDIOMA=$_GET['IDIOMA'];
    $ID=$_GET['ID'];
    $SO=$_GET['SO'];


  $validacion = "SELECT TRP_BOOT FROM trigger_recomendacion_publicacion WHERE TRP_BOOT = '$BOOT' and TRP_VERSION= '$VERSION' and publicacion_ID_PUBLICACION= '$ID';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


         $sql2 = "INSERT INTO trigger_recomendacion_publicacion (FECHA_TRP,TRP_IDIOMA,TRP_BOOT,TRP_VERSION,TRP_MODELO,TRP_SO,publicacion_ID_PUBLICACION) VALUES (CURDATE(),'ing','$BOOT','$VERSION','$MOD','$SO','$ID');";
        $res = $conn->query($sql2);
        
        $sql3 = "UPDATE `publicacion` set PUB_RECOMENDACIONES= (SELECT COUNT(publicacion_ID_PUBLICACION) from `trigger_recomendacion_publicacion` WHERE publicacion_ID_PUBLICACION='$ID') WHERE ID_PUBLICACION='$ID'";
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