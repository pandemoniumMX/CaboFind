<?php

require 'conexion.php';

if ($_POST['id']) {

$return_arr = array();
  $id = $_POST['id'];
$query = "SELECT * FROM galeria WHERE ID_NEGOCIO = $id";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
    $id_gal = $row['ID_GALERIA'];
    $foto = $row['GAL_FOTO'];

    $return_arr[] = array("id" => $id_gal,
                    "foto" => $foto);
}
}
// Encoding array in JSON format
echo json_encode($return_arr);
