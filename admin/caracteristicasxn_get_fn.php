<?php
include'conexion.php';
$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];
  $consulta = "SELECT n.ID_CARACTERISTICAS, n.CAR_NOMBRE, e.NEG_CAR_ESTATUS, e.negocios_ID_NEGOCIO, e.caracteristicas_ID_CARACTERISTICAS, e.ID_NEG_CAR
  FROM   caracteristicas  n, neg_car e
  WHERE n.ID_CARACTERISTICAS = e.caracteristicas_ID_CARACTERISTICAS and e.ID_NEG_CAR=$id";
   $resultado = $conn->query($consulta);
   if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "id_car"       =>  $row["caracteristicas_ID_CARACTERISTICAS"],
    "car"       =>  $row["ID_CARACTERISTICAS"],     
    "est"       =>  $row["NEG_CAR_ESTATUS"], 
    "idn"        =>  $row["negocios_ID_NEGOCIO"],
    "car_id"        =>  $row["ID_NEG_CAR"],

  );
   }
   }
  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}
echo json_encode($response);
 ?>