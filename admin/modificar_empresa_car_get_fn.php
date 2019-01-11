<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT n.ID_CARACTERISTICA, n.CAR_NOMBRE, e.ID_CXN, e.CXN_ESTATUS
  FROM   caracteristicas  n, caracteristicaxnegocio e
  WHERE n.ID_CARACTERISTICA = e.CXN_ID_CARACTERISTICA and e.CXN_ID_NEGOCIO=$id";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "nom"        =>  $row["CAR_NOMBRE"],
    "est"       =>  $row["CXN_ESTATUS"],   
    "id_car"       =>  $row["ID_CARACTERISTICA"],   


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
