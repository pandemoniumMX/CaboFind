<?php   
include 'conexion.php';

$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];


$sql = "INSERT INTO caracteristicas(CAR_NOMBRE, CAR_DESCRIPCION, CAR_ESTATUS)
VALUES ('$nombre', '$descripcion', 'A');";
$res = $conn->query($sql);


echo "<script>window.open('caracteristicas.php','_self')</script>";


?>