<?php

require 'conexion.php';
//include 'fuctions.php';
//header('Content-type: admin_ctrl_empleados.php; charset=UTF-8');
$response = array();

if ($_POST['empresa']) {

  $emp = $_POST ['empresa'];
  $dir = $_POST ['direccion'];
  $des = $_POST ['descripcion'];
  $eti = $_POST ['etiquetas'];
  $cor = $_POST ['correo'];
  $tel = $_POST ['telefono'];
  $cat = $_POST ['categoria'];
  $sub = $_POST ['subcategoria'];
  $resp = $_POST ['responsable'];
  $map = $_POST ['map'];


  $validacion = "SELECT NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$emp';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


    $sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_DIRECCION,
      NEG_RESPONSABLE, NEG_DESCRIPCION, NEG_ETIQUETAS,ID_SUBCATEGORIA, NEG_ESTATUS, NEG_MAP)
    VALUES ('$emp', '$cor', $tel,'$dir','$resp','$des','$eti', $sub,'A', '$map');";
    $res = $conn->query($sql2);

    if (!$res) {
      $response['status']  = 'error';
$response['message'] = $conn->error;
     }
     else{
       $response['status']  = 'success';
$response['message'] = 'Negocio registrado correctamente ...';
     }

   }else{
     $response['status']  = 'error';
$response['message'] = 'Ya existe un negocio con ese nombre, intenta uno diferente';
   }
   echo json_encode($response);
}
?>
