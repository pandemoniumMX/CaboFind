<?php
require "conexion.php";

//detalle anuncio
$titulo = $_POST['titulo'];
$titulo_ing = $_POST['titulo_ing'];
$descripcion = $_POST['descripcion'];
$descripcion_ing = $_POST['descripcion_ing'];
$categoria = $_POST['categoria'];
$id = $_POST['anunciante'];
$exposicion = $_POST['exposicion'];

$map = $_POST['map'];
$map_ing = $_POST['map_ios'];
$ciudad = $_POST['ciudad'];
$video = $_POST['video'];
$precio = $_POST['precio'];
$precio_ing = $_POST['precio_ing'];

$fecha_limite = $_POST['fecha_limite'];


$estado = $_POST['estado'];
$estado_ing = $_POST['estado_ing'];

$precio = $_POST['precio'];
$precio_usd = $_POST['precio_ing'];

$estatus = $_POST['estatus'];
$ingles = $_POST['ingles'];

$img_esp = $_FILES['file']['tmp_name'];
$img_ing = $_FILES['file1']['tmp_name'];

//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/anuncios/$id/".$_FILES['file']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "http://cabofind.com.mx/assets/galeria/anuncios/$id/".$_FILES['file']['name'];

$destino1_ing = "../assets/galeria/anuncios/$id/".$_FILES['file1']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2_ing = "http://cabofind.com.mx/assets/galeria/anuncios/$id/".$_FILES['file1']['name'];
//crea directorio si no existe.
$target_dir = "../assets/galeria/anuncios/$id/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
move_uploaded_file($img_esp, $destino1);
move_uploaded_file($img_ing, $destino1_ing);

//inserta la imagen en la galeria
$sql = "INSERT INTO galeria(GAL_FOTO ,GAL_FOTO_ING, GAL_TIPO, GAL_ESTATUS, anuncios_ID_ANUNCIOS)
VALUES ('$destino2','$destino2_ing', 'Logo','A', $id);";
$res = $conn->query($sql);
//consulta publicacion recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_GALERIA FROM galeria order by ID_GALERIA DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_g          = $fila['ID_GALERIA'];
}
//inserta datos de la publicacion
$sql3 = "INSERT INTO anuncios(ANUN_TITULO ,ANUN_TITULO_ING, ANUN_DESCRIPCION, ANUN_DESCRIPCION_ING,ANUN_FECHA_CADUCIDAD, ANUN_VIDEO, ANUN_ESTADO, ANUN_ESTADO_ING, ANUN_ESTATUS, anunciante_ID_ANUNCIANTE, galeria_ID_GALERIA)
VALUES ('$titulo','$titulo_ing','$descripcion','$descripcion_ing','$fecha_limite','$video','$estado','$estado_ing','A', $id, $id_g);";
$res2 = $conn->query($sql3);

$sql4 = "INSERT INTO anun_exp(NEG_EXP_ESTATUS, exposicion_ID_EXPOSICION, anuncios_ID_ANUNCIOS)
VALUES ('A', $exposicion, $id);";
$res3 = $conn->query($sql4);

