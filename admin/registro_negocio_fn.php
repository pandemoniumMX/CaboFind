<?php   
include 'conexion.php';
$empresa="SELECT ID_NEGOCIO FROM `negocios` order by ID_NEGOCIO DESC limit 1";
$suma = 1;
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id           = $suma+$fila['ID_NEGOCIO'];
}
//Sumar con mysql

$emp = $_POST ['empresa'];
$raz = $_POST ['razon'];
$rfc = $_POST ['rfc'];
$dir = $_POST ['direccion'];
$des = $_POST ['descripcion'];
$eti = $_POST ['etiquetas'];
/*$car = $_POST ['ramo'];
$car = $_POST ['categoria'];
*/
$sub = $_POST ['subcategoria'];
$usu = $_POST ['usuario'];

$alc = $_POST ['alcance'];
$ran = $_POST ['rango'];
$expf = $_POST ['expf'];


$sql="UPDATE usuarios set ID_NEGOCIO='$id' where ID_USUARIO='$usu'";
$res = $conn->query($sql);


$sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_RAZONSOCIAL, NEG_RFC, NEG_DIRECCION, NEG_DESCRIPCION, NEG_ETIQUETAS,ID_SUBCATEGORIA, NEG_ESTATUS)
VALUES ('$emp', '$raz','$rfc','$dir','$des','$eti','$sub','A');";
$res = $conn->query($sql2);

$sql3 = "INSERT INTO exposicion(EXP_NIVEL, EXP_RANGO, EXP_FECHA_CADUCIDAD, ID_NEGOCIO) 
VALUES ('$alc', '$ran','$expf','$id');";
$res = $conn->query($sql3);


//echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($id), "','_self')</script>";
echo "<script>window.open('registro_negocio_galeria.php?id=", base64_encode($id), "','_self')</script>";



?>