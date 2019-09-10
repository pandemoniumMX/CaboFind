<?php   
include 'conexion.php';

$response = array();

if ($_POST['id']) {
$id = $_POST ['id'];
$exp = $_POST ['exp'];

$validacion = "SELECT negocios_ID_NEGOCIO FROM neg_exp WHERE negocios_ID_NEGOCIO = '$id';";
    $resul = $conn->query($validacion);   
   
    if (mysqli_num_rows($resul)==0) {  

$sql3 = "INSERT INTO neg_exp(negocios_ID_NEGOCIO, NEG_EXP_ESTATUS, exposicion_ID_EXPOSICION)
    VALUES ('$id','A','$exp');";
    $res = $conn->query($sql3);


    echo "<script>window.open('caracteristicasxn.php?id=", $id, "','_self')</script>";

 if (!$res) {
      $response['status']  = 'error';
$response['message'] = $conn->error;
     }
     else{
       $response['status']  = 'success';
$response['message'] = 'Exposición registrada correctamente ...';
     }

   }else{
     $response['status']  = 'error';
$response['message'] = 'Ya existe un nivel de exposición';
   }
   echo json_encode($response);

}
?>
