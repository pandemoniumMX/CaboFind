<?php

include 'conexion.php';
$idp = $_POST ['idps'];
$tit = $_POST ['titulos'];
$titulo_ing = $_POST ['titulo_ings'];
$neg = $_POST ['s_negs'];
$detalle = $_POST ['detalles'];
$detalle_ing = $_POST ['detalle_ings'];
$video = $_POST ['videos'];
$publicacion = $_POST ['publicacions'];
$estatus = $_POST ['estatuss'];




$archivo1 = $_FILES['file']['tmp_name'];
$destino1 = "assets/galeria/empresas/$neg/". $_FILES['file']['name'];


//validación si el titulo ya existe no se inserta de nuevo.

$validacion = "SELECT PUB_TITULO FROM publicacion WHERE PUB_TITULO = '$tit';";
$resul = $conn->query($validacion);
if (mysqli_num_rows($resul)==0) {
  
  //crea directorio si no existe.
  $target_dir = "../assets/galeria/empresas/$neg/";
  if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
  
  move_uploaded_file($archivo1, $destino1);

  }
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
   $sql2 = "UPDATE publicacion SET PUB_TITULO ='$tit',PUB_TITULO_ING='$titulo_ing',PUB_DETALLE='$detalle',PUB_DETALLE_ING='$detalle_ing',PUB_VIDEO='$video',
   PUB_TIPO='$publicacion',PUB_ESTATUS='$estatus',negocios_ID_NEGOCIO='$neg',galeria_ID_GALERIA ='$id_g' WHERE ID_PUBLICACION='$idp';";
   $res = $conn->query($sql2);





}else{echo "Titulo de publicación ya existente";}
echo "<script> window.location='publicaciones.php'</script>;";
?>
