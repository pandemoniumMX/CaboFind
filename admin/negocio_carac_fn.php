<?php

require 'conexion.php';

if ($_POST['id']) {

$return_arr = array();
  $id = $_POST['id'];
  
$query = "SELECT c.CAR_NOMBRE
FROM neg_car n_c , caracteristicas c
WHERE n_c.caracteristicas_ID_CARACTERISTICAS=c.ID_CARACTERISTICAS 
and n_c.negocios_ID_NEGOCIO='22'
ORDER BY c.CAR_NOMBRE ASC";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    //$id_car = $row['caracteristicas_ID_CARACTERISTICAS'];
    $nombre = $row['CAR_NOMBRE'];

    $return_arr[] = array(
     // "id" => $id_car,
      "nombre" => $nombre
    );
}
}
// Encoding array in JSON format
echo json_encode($return_arr);
