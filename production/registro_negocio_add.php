
<?php
include 'conexion.php';

$name = $_POST['name'];
$razons = $_POST['razons'];
$email = $_POST['email'];
$rfc = $_POST['rfc'];
$desc= $_POST['desc'];
$resp = $_POST['resp'];
$dire = $_POST['dire'];
$tel = $_POST['number'];
$cate = $_POST['cate'];
$ramo = $_POST['ramo'];
$expo = $_POST['expo'];

$validar="SELECT NEG_RAZONSOCIAL FROM negocios WHERE NEG_RAZONSOCIAL = '$razons' ";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){

    echo "<script>alert('*ERROR* Ya existe este nombre, intenta con otro!')</script>";
  echo "<script>window.open('registro_negocio.php','_self')</script>";

}

else
{

$sql = "INSERT INTO negocios(NEG_NOMBRE, NEG_RAZONSOCIAL, NEG_RFC, NEG_TELEFONO, NEG_DIRECCION,
                              NEG_DESCRIPCION, NEG_RESPONSABLE, NEG_ESTATUS,
                              NEG_ID_RAMOS, NEG_ID_CATEGORIAS, NEG_ID_EXPOSICION)
VALUES ('$name','$razons','$rfc', $tel,'$dire','$desc','$resp','A', $ramo, $cate, $expo)";


if ($conn->query($sql) === TRUE) {

  echo "<script>alert('*success* animo!')</script>";
echo "<script>window.open('registro_negocio.php','_self')</script>";


} else {
  echo "<script>alert('*ERROR*')</script>";
echo "<script>window.open('registro_negocio.php','_self')</script>";
}

$conn->close();
}

?>
