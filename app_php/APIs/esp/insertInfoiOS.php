<?php
include '../../conn.php';

$response = array();

if ($_GET['BOOT']) {

    $MOD=$_GET['MOD'];
    $BOOT=$_GET['BOOT'];
    $VERSION=$_GET['VERSION'];
    $IDIOMA=$_GET['IDIOMA'];


$validacion = "SELECT TID_BOOT FROM trigger_info_device WHERE TID_BOOT = '$BOOT' and TID_VERSION= '$VERSION';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


        $sql=$conn->query("

        INSERT INTO `trigger_info_device` (TID_MODELO,TID_BOOT,TID_VERSION,TID_IDIOMA,TID_SO) VALUES ('$MOD','$BOOT','$VERSION','$IDIOMA','iOS')
        
        ");

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
}
?>