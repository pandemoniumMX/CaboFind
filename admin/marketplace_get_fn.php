<?php
include'conexion.php';
$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];
/*
  $empresa="SELECT g.GAL_FOTO,g.ID_GALERIA, g.GAL_FOTO FROM galeria g, publicacion p where
  WHERE g.ID_GALERIA = p.galeria_ID_GALERIA and p.ID_PUBLICACION=$id";
 $ejecutar = mysqli_query($conn, $empresa);
 while($fila=mysqli_fetch_array($ejecutar)){
 $id_g          = $fila['ID_GALERIA'];
 $foto          = $fila['GAL_FOTO'];

 }
*/

  $consulta = "SELECT * FROM galeria g, publicacion p  WHERE g.ID_GALERIA = p.galeria_ID_GALERIA and p.ID_PUBLICACION=$id;";
  $resultado = $conn->query($consulta);
  if($resultado->num_rows > 0){
   while($row = $resultado->fetch_assoc()) {
 $response['data'] = array (
    "idp"        =>  $row["ID_PUBLICACION"],
    "titulo"     =>  $row["PUB_TITULO"],
    "titulo_ing" =>  $row["PUB_TITULO_ING"],     
    "detalle"    =>  $row["PUB_DETALLE"], 
    "detalle_ing"=>  $row["PUB_DETALLE_ING"],
    "video"      =>  $row["PUB_VIDEO"],
    "publicacion"=>  $row["PUB_TIPO"],
    "estatus"    =>  $row["PUB_ESTATUS"],
    "caducidad"       =>  $row["PUB_FECHA_LIMITE"],
    "s_neg"      =>  $row["negocios_ID_NEGOCIO"],
    "id_g"       =>  $row["ID_GALERIA"],
    "img"       =>  $row["GAL_FOTO"],
    "img1"       =>  $row["GAL_FOTO_ING"],



  );
   }
   }
  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id puto";
}
echo json_encode($response);
 ?>