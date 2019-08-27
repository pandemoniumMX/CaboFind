<?php
include'conexion.php';
$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];
  $consulta = "SELECT n.ID_SERVICIOS, n.SERV_NOMBRE, e.NEG_SERV_ESTATUS, e.negocios_ID_NEGOCIO, e.servicios_ID_SERVICIOS, e.ID_NEG_SERV
  FROM   servicios  n, neg_serv e
  WHERE n.ID_SERVICIOS = e.servicios_ID_SERVICIOS and e.ID_NEG_SERV=$id";
   $resultado = $conn->query($consulta);
   if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "id_car"       =>  $row["servicios_ID_SERVICIOS"],
    "car"       =>  $row["ID_SERVICIOS"],     
    "est"       =>  $row["NEG_SERV_ESTATUS"], 
    "idn"        =>  $row["negocios_ID_NEGOCIO"],
    "car_id"        =>  $row["ID_NEG_SERV"],

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