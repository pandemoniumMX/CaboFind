<?php   
include 'conexion.php';
$id = $_POST ['id'];
$car = $_POST ['car'];
$sql = "INSERT INTO neg_car(caracteristicas_ID_CARACTERISTICAS, negocios_ID_NEGOCIO, NEG_CAR_ESTATUS)
VALUES ('$car','$id','A');";
$res = $conn->query($sql);
echo "<script>window.open('caracteristicasxn.php?id=", $id, "','_self')</script>";
//echo "<script>window.open('caracteristicasxn.php?id=", $idn, "','_self')</script>";

?>