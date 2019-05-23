<?php
include 'conexion.php';

$neg = $_POST ['s_neg'];
$tit = $_POST ['titulo'];
$not = $_POST ['nota'];



$sql2 = "INSERT INTO publicacion(PUB_TITULO, PUB_DETALLE, negocios_ID_NEGOCIO)
VALUES ('$tit','$not', $neg);";
$res = $conn->query($sql2);

if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
   echo "<script> window.location='publicaciones.php'</script>;";

 }

?>
