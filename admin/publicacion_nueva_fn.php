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
$archivo1 = $_FILES['file']['tmp_name'];
//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/empresas/$id/".$_FILES['file']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "http://cabofind.com.mx/assets/galeria/empresas/$id/".$_FILES['file']['name'];

//crea directorio si no existe.
$target_dir = "../assets/galeria/empresas/$id/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
move_uploaded_file($archivo1, $destino1);

//inserta la imagen en la galeria
$sql = "INSERT INTO galeria(GAL_FOTO ,GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
VALUES ('$destino2', 'Publicacion','A', $id);";
$res = $conn->query($sql);

//consulta publicación recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_GALERIA FROM galeria order by ID_GALERIA DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_g          = $fila['ID_GALERIA'];
}

//inserta la imagen en la galeria
$sql3 = "INSERT INTO publicacion(PUB_TITULO ,PUB_TITULO_ING, PUB_DETALLE, PUB_DETALLE_ING, PUB_VIDEO, PUB_TIPO, PUB_ESTATUS, negocios_ID_NEGOCIO, galeria_ID_GALERIA)
VALUES ('$titu','$titulo_ing','$deta','$detalle_ing','$video','$publicacion','A', $id, $id_g);";
$res2 = $conn->query($sql3);
    echo $res2?'ok':'err';
    if (!$res2) {
       printf("Errormessage: %s\n", $conn->error);
    }
}
