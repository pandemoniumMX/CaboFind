<?php
include'conexion.php';
$response = array();
if(isset($_POST['depart'])){
  $id = $_POST['depart'];
  $consulta = "SELECT ID_SUBCATEGORIA, SUB_NOMBRE FROM subcategoria WHERE ID_CATEGORIA = $id;";
   $resultado = $conn->query($consulta);
   $users_arr = array();
   if($resultado->num_rows > 0){
     while( $row = mysqli_fetch_array($resultado) ){
       $id_sub = $row['ID_SUBCATEGORIA'];
       $name_sub = $row['SUB_NOMBRE'];
       $users_arr[] = array("id" => $id_sub, "name" => $name_sub);
   }
   }
  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
  echo json_encode($users_arr);
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}
 ?>