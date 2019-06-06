<?php
include 'conexion.php';

$emp = $_POST ['empresa'];
$dir = $_POST ['direccion'];
$des = $_POST ['descripcion'];
$eti = $_POST ['etiquetas'];
$cor = $_POST ['correo'];
$tel = $_POST ['telefono'];
$cat = $_POST ['categoria'];
$sub = $_POST ['subcategoria'];
$resp = $_POST ['responsable'];
$map = $_POST ['map'];
$archivo1 = $_FILES['img']['tmp_name'];
$destino1 = "assets/galeria/empresas/$emp/". $_FILES['img']['name'];


//validación si el titulo ya existe no se inserta de nuevo.
$validacion = "SELECT NEG_NOMBRE FROM negocios WHERE NEG_NOMBRE = '$emp';";
$resul = $conn->query($validacion);
if (mysqli_num_rows($resul)==0) {
  //crea directorio si no existe.
  $target_dir = "assets/galeria/empresas/$emp/";
  if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
  }
  move_uploaded_file($archivo1, $destino1);

$sql2 = "INSERT INTO negocios(NEG_NOMBRE, NEG_CORREO, NEG_TEL, NEG_DIRECCION,
  NEG_RESPONSABLE, NEG_DESCRIPCION, NEG_ETIQUETAS,ID_SUBCATEGORIA, NEG_ESTATUS, NEG_MAP)
VALUES ('$emp', '$cor', $tel,'$dir','$resp','$des','$eti', $sub,'A', '$map');";
$res = $conn->query($sql2);

//consulta publicación recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_NEGOCIO FROM negocios order by ID_NEGOCIO DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_neg          = $fila['ID_NEGOCIO'];
}
//inserta la imagen en la galeria
$sql3 = "INSERT INTO galeria(GAL_FOTO ,GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
VALUES ('$destino1', 'Logo','A', $id_neg);";
$res2 = $conn->query($sql3);




if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
   echo "<script>window.location('negocios.php')</script>";

 }
}else {
printf("Errormessage: %s\n", $conn->error);
}

?>
