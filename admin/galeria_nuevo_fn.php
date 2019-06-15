<?php

require "conexion.php";

if(!empty($_POST['tipo']) || !empty($_POST['id']) || !empty($_FILES['file']['name'])){
$tipo = $_POST['tipo'];
$id = $_POST['id'];
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
$sql3 = "INSERT INTO galeria(GAL_FOTO ,GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
VALUES ('$destino2', '$tipo','A', $id);";
$res2 = $conn->query($sql3);
echo "<script> window.location='galeria.php?id=$id'</script>;";
}else{echo "<script> window.location='negocios.php'</script>;";
}
?>
