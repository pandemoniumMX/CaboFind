<?php
include 'conexion.php';

if ($_POST['nom']) {
$nom = $_POST ['nom'];
$nom_ing = $_POST ['nom_ing'];


  $validacion = "SELECT CAR_NOMBRE FROM Caracteristicas WHERE CAR_NOMBRE = '$nom';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {

$sql = "INSERT INTO caracteristicas(CAR_NOMBRE, CAR_NOMBRE_ING, CAR_ESTATUS)
VALUES ('$nom','$nom_ing', 'A');";
$res = $conn->query($sql);

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
$response['message'] = 'Ya existe un caracteristica con ese nombre, intenta uno diferente';
}
}
echo json_encode($response);




?>
