<?php

require "conexion.php";
if(!empty($_POST['titulo']) || !empty($_POST['detalle']) || !empty($_FILES['file']['name'])){
$titu = $_POST['titulo'];
$deta = $_POST['detalle'];
$id = $_POST['s_neg'];
$archivo1 = $_FILES['file']['tmp_name'];
//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/empresas/$id/".$_FILES['file']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "assets/galeria/empresas/$id/".$_FILES['file']['name'];

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
$sql3 = "INSERT INTO publicacion(PUB_TITULO ,PUB_DETALLE, negocios_ID_NEGOCIO, galeria_ID_GALERIA)
VALUES ('$titu','$deta', $id, $id_g);";
$res2 = $conn->query($sql3);
    echo $res2?'ok':'err';
    if (!$res2) {
       printf("Errormessage: %s\n", $conn->error);
    }
}
