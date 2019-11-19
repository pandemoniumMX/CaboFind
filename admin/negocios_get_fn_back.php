<?php
include'conexion.php';
//verificar_sesion();


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];


$consulta = "SELECT * FROM negocios WHERE ID_NEGOCIO = $id";

   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id_n"              =>  $row["ID_NEGOCIO"],
    "nombre"            =>  $row["NEG_NOMBRE"],
    "correos"            =>  $row["NEG_CORREO"],    
    "telefono"          =>  $row["NEG_TEL"],
    "telefono_res"      =>  $row["NEG_TEL_RESP"],
    "direccion"         =>  $row["NEG_DIRECCION"],
    "ciudad"            =>  $row["NEG_LUGAR"],
    "descripcion_esp"   =>  $row["NEG_DESCRIPCION"],
    "descripcion_ing"   =>  $row["NEG_DESCRIPCION_ING"],
    "nombre_res"        =>  $row["NEG_RESPONSABLE"],
    "estatus"           =>  $row["NEG_ESTATUS"],
    "etiquetas_esp"     =>  $row["NEG_ETIQUETAS"],
    "etiquetas_ing"     =>  $row["NEG_ETIQUETAS_ING"],    
    "maps"              =>  $row["NEG_MAP"],
    "maps_ing"          =>  $row["NEG_MAP_IOS"],
    "facebook"          =>  $row["NEG_FACEBOOK"],
    "instagram"         =>  $row["NEG_INSTAGRAM"],
    "web"               =>  $row["NEG_WEB"], 
    "horario_esp"       =>  $row["NEG_HORARIO"],
    "horario_ing"       =>  $row["NEG_HORARIO_ING"],    
    "ingles"           =>  $row["NEG_INGLES"],
    "subcategoria"      =>  $row["ID_SUBCATEGORIA"],    
    


  );
   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>