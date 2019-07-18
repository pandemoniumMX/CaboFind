<?php

require 'conexion.php';
//include 'fuctions.php';
//header('Content-type: admin_ctrl_empleados.php; charset=UTF-8');
$response = array();

if ($_POST['empresa']) {

  $emp = $_POST ['empresa'];
  $cor = $_POST ['correo'];
  $tel = $_POST ['telefono'];
  $dir = $_POST ['direccion'];
  $resp = $_POST ['responsable'];
  $des = $_POST ['descripcion'];
  $des_ing = $_POST ['descripcion_ing'];
  $hor = $_POST ['horario'];

  $cat = $_POST ['categoria'];
  $sub = $_POST ['subcategoria'];
  $map = $_POST ['map'];
  $eti = $_POST ['etiquetas'];
  $fb = $_POST ['facebook'];
  $in = $_POST ['instagram'];
  $web = $_POST ['web'];
  $hor_ing = $_POST ['horario_ing'];



  $validacion = "SELECT NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$emp';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


    $sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_DIRECCION, NEG_RESPONSABLE,
     NEG_DESCRIPCION, NEG_DESCRIPCION_ING, NEG_ETIQUETAS,ID_SUBCATEGORIA, NEG_ESTATUS, 
     NEG_MAP,NEG_HORARIO, NEG_HORARIO_ING,NEG_FACEBOOK,NEG_INSTAGRAM,NEG_WEB)
    VALUES ('$emp','$cor','$tel','$dir','$resp','$des','$des_ing','$eti','$sub','A', '$map','$hor','$hor_ing','$fb','$in','$web');";
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
