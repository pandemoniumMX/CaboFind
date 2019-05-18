
<?php
include '../conexion.php';

$name = $_POST['name'];
$email = $_POST['email'];
$desc= $_POST['desc'];
$resp = $_POST['resp'];
$dire = $_POST['dire'];
$tel = $_POST['number'];
$cate = $_POST['cate'];
$expo = $_POST['expo'];
$eti =  $_POST['etiqueta'];

$validar="SELECT NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$name' ";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){

    echo "<script>alert('*ERROR* Ya existe este nombre, intenta con otro!')</script>";
  echo "<script>window.open('registro_negocio.php','_self')</script>";

}

else
{

$sql = "INSERT INTO negocios(NEG_NOMBRE, NEG_TEL, NEG_DIRECCION, NEG_CORREO,
                              NEG_DESCRIPCION, NEG_RESPONSABLE, NEG_ESTATUS,
                              ID_SUBCATEGORIA, NEG_ETIQUETAS)
VALUES ('$name', $tel,'$dire','$email','$desc','$resp','A', $cate, '$eti')";


if ($conn->query($sql) === TRUE) {

  echo "<script>alert('*success* animo!')</script>";
echo "<script>window.open('registro_negocio.php','_self')</script>";


} else {
  echo "<script>alert('*ERROR*')</script>";
//echo "<script>window.open('registro_negocio.php','_self')</script>";

echo  "INSERT INTO negocios(NEG_NOMBRE, NEG_TEL, NEG_DIRECCION, NEG_CORREO,
                              NEG_DESCRIPCION, NEG_RESPONSABLE, NEG_ESTATUS,
                              ID_SUBCATEGORIA, NEG_ETIQUETAS)
VALUES ('$name', $tel,'$dire','$email','$desc','$resp','A', $cate, '$eti')";
}

$conn->close();
}

?>
