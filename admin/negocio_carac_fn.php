<?php

require 'conexion.php';

if ($_POST['id']) {

$return_arr = array();
  $id = $_POST['id'];
$query = "SELECT * FROM caracteristicas";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $id_car = $row['ID_CARACTERISTICAS'];
    $nombre = $row['CAR_NOMBRE'];

    $return_arr[] = array("id" => $id_car,
                    "nombre" => $nombre);
}
}
// Encoding array in JSON format
echo json_encode($return_arr);
