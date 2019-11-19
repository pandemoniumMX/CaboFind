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

  $consulta = "SELECT * from negocios where ID_NEGOCIO=$id;";
  $resultado = $conn->query($consulta);
  if($resultado->num_rows > 0){
   while($row = $resultado->fetch_assoc()) {
 $response['data'] = array (
    "idn"        =>  $row["ID_NEGOCIO"],
    "name"     =>  $row["NEG_NOMBRE"],
    "mail" =>  $row["NEG_CORREO"],     
    "tel"    =>  $row["NEG_TEL"], 
    "tel_res"=>  $row["NEG_TEL_RESP"],
    "direction"         =>  $row["NEG_DIRECCION"],
    "city"      =>  $row["NEG_LUGAR"],
    "desc"=>  $row["NEG_DESCRIPCION"],
    "desc_ing"    =>  $row["NEG_DESCRIPCION_ING"],
    "resp1"      =>  $row["NEG_RESPONSABLE"],
    "estatus1"       =>  $row["NEG_ESTATUS"],
    "eti_esp1"        =>  $row["NEG_ETIQUETAS"],
    "eti_ing1"       =>  $row["NEG_ETIQUETAS_ING"],
    "maps"              =>  $row["NEG_MAP"],
    "maps_ing"          =>  $row["NEG_MAP_IOS"],
    "facebook1"          =>  $row["NEG_FACEBOOK"],
    "instagram1"         =>  $row["NEG_INSTAGRAM"],
    "web1"               =>  $row["NEG_WEB"], 
    "horario_esp1"       =>  $row["NEG_HORARIO"],
    "horario_ing1"       =>  $row["NEG_HORARIO_ING"],    
    "ingles1"           =>  $row["NEG_INGLES"],
    "subcategoria1"      =>  $row["ID_SUBCATEGORIA"], 



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