<?php
include 'conexion.php';

$emp = $_POST ['empresa'];
$dir = $_POST ['direccion'];
$des = $_POST ['descripcion'];
$eti = $_POST ['etiquetas'];
$cor = $_POST ['correo'];
$tel = $_POST ['tel'];
$cat = $_POST ['categoria'];
$sub = $_POST ['subcategoria'];
$resp = $_POST ['responsable'];

$alc = $_POST ['alcance'];
$ran = $_POST ['rango'];
$expf = $_POST ['expf'];


$sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_DIRECCION, NEG_RESPONSABLE, NEG_DESCRIPCION, NEG_ETIQUETAS,ID_SUBCATEGORIA, NEG_ESTATUS)
VALUES ('$emp', '$cor', $tel,'$dir','$resp','$des','$eti', $sub,'A');";
$res = $conn->query($sql2);

$empresa="SELECT ID_NEGOCIO FROM `negocios` order by ID_NEGOCIO DESC limit 1";

$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id           = $fila['ID_NEGOCIO'];
}
$sql3 = "INSERT INTO exposicion(EXP_NIVEL, EXP_FECHA_CADUCIDAD, ID_NEGOCIO)
VALUES ('$alc', $expf, $id);";
$res2 = $conn->query($sql3);


if (!$res2) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
   echo "<script>window.open('registro_negocio_galeria.php?id=", base64_encode($id), "','_self')</script>";

 }

//echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($id), "','_self')</script>";



?>
