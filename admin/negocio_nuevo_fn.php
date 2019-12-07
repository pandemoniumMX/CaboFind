<?php

require 'conexion.php';
//include 'fuctions.php';
//header('Content-type: admin_ctrl_empleados.php; charset=UTF-8');
$response = array();


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
  $map_ios = $_POST ['map_ios'];

  $ciu = $_POST ['ciudad'];
  $fb = $_POST ['facebook'];
  $in = $_POST ['instagram'];
  $web = $_POST ['web'];
  $hor_ing = $_POST ['horario_ing'];
  $eti_esp = $_POST ['etiquetas_esp'];
  $eti_ing = $_POST ['etiquetas_ing'];
  $estatus = $_POST ['estatus'];
  $ingles = $_POST ['ingles'];


  require "conexion.php";


//HConsulta y obtengo los datos



  $validacion = "SELECT ID_NEGOCIO,NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$emp';";
    $resul = $conn->query($validacion);   
   
    if (mysqli_num_rows($resul)==0) {     
     

    $sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_TEL_RESP, NEG_DIRECCION, NEG_LUGAR, NEG_RESPONSABLE,
     NEG_DESCRIPCION, NEG_DESCRIPCION_ING, NEG_ETIQUETAS, NEG_ETIQUETAS_ING,ID_SUBCATEGORIA, 
     NEG_MAP,NEG_MAP_IOS,NEG_HORARIO, NEG_HORARIO_ING,NEG_FACEBOOK,NEG_INSTAGRAM,NEG_WEB,NEG_ESTATUS,NEG_INGLES)
    VALUES ('$emp','$cor','$tel','$tel_res','$dir','$ciu','$resp','$des','$des_ing','$eti_esp','$eti_ing','$sub', '$map','$map_ios','$hor','$hor_ing','$fb','$in','$web','$estatus','$ingles');";
    $res = $conn->query($sql2);


    $empresa="SELECT ID_NEGOCIO FROM negocios order by 	NEG_FECHA DESC limit 1";
    $ejecutar = mysqli_query($conn, $empresa);
    while($fila=mysqli_fetch_array($ejecutar)){
    $id_n          = $fila['ID_NEGOCIO'];
    }

    

    if (!$res) {
      $response['status']  = 'error';
$response['message'] = $conn->error;
     }
     else{
       $response['status']  = 'success';
$response['message'] = 'Negocio registrado correctamente ...';
echo "<script> window.location.href='galeria.php?id=$id_n'</script>;";

     }

   }else{
     $response['status']  = 'error';
$response['message'] = 'Ya existe un negocio con ese nombre, intenta uno diferente';
   }
   echo json_encode($response);


?>
