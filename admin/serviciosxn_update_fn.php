<?php   
include 'conexion.php';
$id_car = $_POST ['id_car'];
$car_id = $_POST ['car_id'];
$idn = $_POST ['idn'];
$car = $_POST ['car'];
$est = $_POST ['est'];
$sql = "UPDATE neg_serv set servicios_ID_SERVICIOS = '$car', NEG_SERV_ESTATUS='$est' Where ID_NEG_SERV='$car_id' ";
$res = $conn->query($sql);
//echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($idn), "','_self')</script>";
echo "<script>window.open('serviciosxn.php?id=", $idn, "','_self')</script>";

?>