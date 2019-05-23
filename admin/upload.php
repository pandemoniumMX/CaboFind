<?php

include 'conexion.php';
$neg = $_POST ['s_neg'];
$tit = $_POST ['titulo'];
$not = $_POST ['nota'];

//crea directorio si no existe.
$target_dir = "assets/galeria/empresas/$neg/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

//mueve el archivo de imagen al directorio en el servidor
$target_file = $target_dir . basename($_FILES["file"]["name"]);
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
   $status = 1;
 }

$img = $_FILES["file"]["name"];
//validación si el titulo ya existe no se inserta de nuevo.
$validacion = "SELECT PUB_TITULO FROM publicacion WHERE PUB_TITULO = '$tit';";
$resul = $conn->query($validacion);
if (mysqli_num_rows($resul)==0) {

  //inserta la publicación nueva
   $sql2 = "INSERT INTO publicacion(PUB_TITULO, PUB_DETALLE, negocios_ID_NEGOCIO)
   VALUES ('$tit','$not', $neg);";
   $res = $conn->query($sql2);

   //consulta publicación recien insertada para anidarla a la imagen en galeria
   $empresa="SELECT ID_PUBLICACION FROM publicacion order by ID_PUBLICACION DESC limit 1";
   $ejecutar = mysqli_query($conn, $empresa);
   while($fila=mysqli_fetch_array($ejecutar)){
   $id_p          = $fila['ID_PUBLICACION'];
   }
   //inserta la imagen en la galeria
   $sql3 = "INSERT INTO galeria(GAL_FOTO ,ID_NEGOCIO, publicacion_ID_PUBLICACION)
   VALUES ('assets/galeria/empresas/$neg/$img', $neg, $id_p);";
   $res2 = $conn->query($sql3);
}
else{
//consulta publicación recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_PUBLICACION FROM publicacion order by ID_PUBLICACION DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_p          = $fila['ID_PUBLICACION'];
}
//inserta la imagen en la galeria
$sql3 = "INSERT INTO galeria(GAL_FOTO ,ID_NEGOCIO, publicacion_ID_PUBLICACION)
VALUES ('assets/galeria/empresas/$neg/$img', $neg, $id_p);";
$res2 = $conn->query($sql3);
}
