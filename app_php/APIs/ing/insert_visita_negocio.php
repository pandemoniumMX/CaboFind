<?php
include '../../conn.php';


$response = array();

    $MOD=$_GET['MOD'];
    $BOOT=$_GET['BOOT'];
    $VERSION=$_GET['VERSION'];
    $IDIOMA=$_GET['IDIOMA'];
    $ID=$_GET['ID'];
    $SO=$_GET['SO'];


  $validacion = "SELECT TVN_BOOT FROM trigger_visita_negocio WHERE TVN_BOOT = '$BOOT' and TVN_VERSION= '$VERSION' and FECHA_TVN=CURDATE() and negocios_ID_NEGOCIO='$ID';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


         $sql2 = "INSERT INTO `trigger_visita_negocio` (FECHA_TVN,IDIOMA_TVN,TVN_BOOT,TVN_VERSION, TVN_MODELO, TVN_SO, negocios_ID_NEGOCIO) VALUES (CURDATE(),'ing','$BOOT','$VERSION','$MOD','$SO','$ID');";
        $res = $conn->query($sql2);
        
        $sql3 = "UPDATE `negocios` set NEG_VISITAS = (SELECT COUNT(negocios_ID_NEGOCIO) from `trigger_visita_negocio` WHERE negocios_ID_NEGOCIO='$ID') WHERE ID_NEGOCIO='$ID'";
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