<?php
require "conexion.php";
if(!empty($_POST['titulo']) || !empty($_POST['titulo_ing']) || !empty($_POST['detalle']) || !empty($_POST['detalle_ing']) || !empty($_POST['video']) || !empty($_POST['publicacion']) || !empty($_FILES['file']['name'])){
$titu = $_POST['titulo'];
$titulo_ing = $_POST['titulo_ing'];
$deta = $_POST['detalle'];
$detalle_ing = $_POST['detalle_ing'];
$video = $_POST['video'];
$publicacion = $_POST['publicacion'];
$id = $_POST['s_neg'];
$caducidad = $_POST['caducidad'];

$img_esp = $_FILES['file']['tmp_name'];
$img_ing = $_FILES['file1']['tmp_name'];

//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/empresas/$id/".$_FILES['file']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "http://cabofind.com.mx/assets/galeria/empresas/$id/".$_FILES['file']['name'];

$destino1_ing = "../assets/galeria/empresas/$id/".$_FILES['file1']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2_ing = "http://cabofind.com.mx/assets/galeria/empresas/$id/".$_FILES['file1']['name'];
//crea directorio si no existe.
$target_dir = "../assets/galeria/empresas/$id/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
move_uploaded_file($img_esp, $destino1);
move_uploaded_file($img_ing, $destino1_ing);

//inserta la imagen en la galeria
$sql = "INSERT INTO galeria(GAL_FOTO ,GAL_FOTO_ING, GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
VALUES ('$destino2','$destino2_ing', 'Publicacion','A', $id);";
$res = $conn->query($sql);
//consulta publicaci贸n recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_GALERIA FROM galeria order by ID_GALERIA DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_g          = $fila['ID_GALERIA'];
}
//inserta datos de la publicacion
$sql3 = "INSERT INTO publicacion(PUB_TITULO ,PUB_TITULO_ING, PUB_DETALLE, PUB_DETALLE_ING,PUB_FECHA_LIMITE, PUB_VIDEO, PUB_TIPO, PUB_ESTATUS, negocios_ID_NEGOCIO, galeria_ID_GALERIA)
VALUES ('$titu','$titulo_ing','$deta','$detalle_ing','$caducidad','$video','$publicacion','A', $id, $id_g);";
$res2 = $conn->query($sql3);
}