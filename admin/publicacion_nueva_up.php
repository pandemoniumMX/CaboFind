<?php

include 'conexion.php';

$tit = $_POST ['titulo'];
$not = $_POST ['detalle'];
$neg = $_POST ['s_neg'];
$archivo1 = $_FILES['img']['tmp_name'];
$destino1 = "assets/galeria/empresas/$neg/". $_FILES['img']['name'];


//validación si el titulo ya existe no se inserta de nuevo.
$validacion = "SELECT PUB_TITULO FROM publicacion WHERE PUB_TITULO = '$tit';";
$resul = $conn->query($validacion);
if (mysqli_num_rows($resul)==0) {
  //crea directorio si no existe.
  $target_dir = "../assets/galeria/empresas/$neg/";
  if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
  }
  move_uploaded_file($archivo1, $destino1);


  //inserta la imagen en la galeria
  $sql3 = "INSERT INTO galeria(GAL_FOTO ,GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
  VALUES ('$destino1', 'Publicacion','A', $neg);";
  $res2 = $conn->query($sql3);

 //consulta publicación recien insertada para anidarla a la imagen en galeria
 $empresa="SELECT ID_GALERIA FROM galeria order by ID_GALERIA DESC limit 1";
 $ejecutar = mysqli_query($conn, $empresa);
 while($fila=mysqli_fetch_array($ejecutar)){
 $id_g          = $fila['ID_GALERIA'];
 }
  //inserta la publicación nueva
   $sql2 = "INSERT INTO publicacion(PUB_TITULO, PUB_DETALLE, negocios_ID_NEGOCIO, galeria_ID_GALERIA)
   VALUES ('$tit','$not', $neg, $id_g);";
   $res = $conn->query($sql2);





}else{echo "Titulo de publicación ya existente";}
echo "<script> window.location='publicaciones.php'</script>;";
?>
