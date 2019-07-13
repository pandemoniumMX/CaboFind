<?php
include 'conexion.php';

if ($_POST['nom']) {
$nom = $_POST ['nom'];
$nom_ing = $_POST ['nom_ing'];


  $validacion = "SELECT SERV_NOMBRE FROM servicios WHERE SERV_NOMBRE = '$nom';";
    $resul = $conn->query($validacion);
    if (mysqli_num_rows($resul)==0) {

$sql = "INSERT INTO servicios(SERV_NOMBRE, SERV_NOMBRE_ING, SERV_ESTATUS)
VALUES ('$nom','$nom_ing', 'A');";
$res = $conn->query($sql);

if (!$res) {
  $response['status']  = 'error';
$response['message'] = $conn->error;
 }
 else{
   $response['status']  = 'success';
$response['message'] = 'Servicio registrado correctamente ...';
 }

}else{
 $response['status']  = 'error';
$response['message'] = 'Ya existe un servicio con ese nombre, intenta uno diferente';
}
}
echo json_encode($response);




?>
