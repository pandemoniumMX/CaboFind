<?php
include '../../conn.php';


$response = array();

    $MOD=$_GET['MOD'];
    $BOOT=$_GET['BOOT'];
    $VERSION=$_GET['VERSION'];
    $IDIOMA=$_GET['IDIOMA'];
    $ID=$_GET['ID'];
    $SO=$_GET['SO'];


  $validacion = "SELECT TVN_BOOT FROM trigger_visita_anuncios WHERE TVN_BOOT = '$BOOT' and TVN_VERSION= '$VERSION' and FECHA_TVN=CURDATE() and anuncios_ID_ANUNCIOS='$ID';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


         $sql2 = "INSERT INTO `trigger_visita_anuncios` (FECHA_TVN,IDIOMA_TVN,TVN_BOOT,TVN_VERSION, TVN_MODELO, TVN_SO, anuncios_ID_ANUNCIOS) VALUES (CURDATE(),'esp','$BOOT','$VERSION','$MOD','$SO','$ID');";
        $res = $conn->query($sql2);

$sql3 = "UPDATE `anuncios` set ANUN_VISITAS= (SELECT COUNT(anuncios_ID_ANUNCIOS) from `trigger_visita_negocio` WHERE anuncios_ID_ANUNCIOS='$ID') WHERE ID_ANUNCIOS='$ID'";
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