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
$id_g = $_POST ['id_g'];



//if(!isset($_POST['img'])){
  if ($_POST['img']) {

$img_esp = $_FILES['img']['tmp_name'];
$img_ing = $_FILES['img1']['tmp_name'];



//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/empresas/$neg/".$_FILES['img']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "http://cabofind.com.mx/assets/galeria/empresas/$neg/".$_FILES['img']['name'];

$destino1_ing = "../assets/galeria/empresas/$neg/".$_FILES['img1']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2_ing = "http://cabofind.com.mx/assets/galeria/empresas/$neg/".$_FILES['img1']['name'];
//crea directorio si no existe.
$target_dir = "../assets/galeria/empresas/$neg/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
move_uploaded_file($img_esp, $destino1);
move_uploaded_file($img_ing, $destino1_ing);




//validación si el titulo ya existe no se inserta de nuevo.
/*
$validacion = "SELECT PUB_TITULO FROM publicacion WHERE PUB_TITULO = '$tit';";
$resul = $conn->query($validacion);
if (mysqli_num_rows($resul)==0) {

*/
  /*
  //crea directorio si no existe.
  $target_dir = "../assets/galeria/empresas/$neg/";
  if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
  
  move_uploaded_file($archivo1, $destino1);

  
  }
  */
  

  //ACTUALIZA la imagen en la galeria
  $sql3 = "UPDATE galeria SET GAL_FOTO ='$destino2',GAL_FOTO_ING ='$destino2_ing' WHERE ID_GALERIA='$id_g'";
  $res2 = $conn->query($sql3);
}else{
 //inserta la publicación nueva
 $sql2 = "UPDATE publicacion SET PUB_TITULO ='$tit',PUB_TITULO_ING='$titulo_ing',PUB_DETALLE='$detalle',PUB_DETALLE_ING='$detalle_ing',PUB_VIDEO='$video',
 PUB_TIPO='$publicacion',PUB_ESTATUS='$estatus',negocios_ID_NEGOCIO='$neg',galeria_ID_GALERIA ='$id_g' WHERE ID_PUBLICACION='$idp';";
 $res = $conn->query($sql2);
//echo "<script> window.location='publicaciones.php'</script>;";
  
}
 //consulta publicación recien insertada para anidarla a la imagen en galeria
 
 





//}

//echo "Titulo de publicación ya existente";
//echo "<script> window.location='publicaciones.php'</script>;";
?>
