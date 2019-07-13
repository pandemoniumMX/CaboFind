<?php   
include 'conexion.php';

$id = $_POST ['id'];
$nom = $_POST ['noms'];
$des = $_POST ['nom_ing'];
$est = $_POST ['ests'];




$sql = "UPDATE servicios set SERV_NOMBRE = '$nom', SERV_NOMBRE_ING='$nom_ing',  CAR_ESTATUS='$est' Where ID_SERVICIOS='$id' ";
$res = $conn->query($sql);


if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
 


echo "<script>window.open('servicios.php','_self')</script>";}


?>