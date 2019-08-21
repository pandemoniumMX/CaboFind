<?php

require 'conexion.php';
//include 'fuctions.php';
//header('Content-type: admin_ctrl_empleados.php; charset=UTF-8');
$response = array();

if ($_POST['empresa']) {

  $emp = $_POST ['empresa'];
  $cor = $_POST ['correo']; 
  $tel = $_POST ['telefono'];
  $tel_res = $_POST ['telefono_res'];

  $dir = $_POST ['direccion'];
  $resp = $_POST ['responsable'];
  $des = $_POST ['descripcion'];
  $des_ing = $_POST ['descripcion_ing'];
  $hor = $_POST ['horario'];

  $cat = $_POST ['categoria'];
  $sub = $_POST ['subcategoria'];
  $map = $_POST ['map'];
  $ciu = $_POST ['ciudad'];
  $fb = $_POST ['facebook'];
  $in = $_POST ['instagram'];
  $web = $_POST ['web'];
  $hor_ing = $_POST ['horario_ing'];
  $eti_esp = $_POST ['etiquetas_esp'];
  $eti_ing = $_POST ['etiquetas_ing'];
  $estatus = $_POST ['estatus'];




  $validacion = "SELECT NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$emp';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {


    $sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_TEL_RESP, NEG_DIRECCION, NEG_LUGAR, NEG_RESPONSABLE,
     NEG_DESCRIPCION, NEG_DESCRIPCION_ING, NEG_ETIQUETAS, NEG_ETIQUETAS_ING,ID_SUBCATEGORIA, 
     NEG_MAP,NEG_HORARIO, NEG_HORARIO_ING,NEG_FACEBOOK,NEG_INSTAGRAM,NEG_WEB,NEG_ESTATUS)
    VALUES ('$emp','$cor','$tel','$tel_res','$dir','$ciu','$resp','$des','$des_ing','$eti_esp','$eti_ing','$sub', '$map','$hor','$hor_ing','$fb','$in','$web','$estatus');";
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
