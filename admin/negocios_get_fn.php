<?php
//include'check_sesion.php';
//include'fuctions.php';
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
   // "id"         =>  $id,
    "nombre"            =>  $row["NEG_NOMBRE"],
    "correo"            =>  $row["NEG_CORREO"],
    "telefono"          =>  $row["NEG_TEL"],
    "telefono_res"      =>  $row["NEG_TEL_RESP"],
    "direccion"         =>  $row["NEG_DIRECCION"],
    "nombre_res"        =>  $row["NEG_RESPONSABLE"],
    "descripcion_esp"   =>  $row["NEG_DESCRIPCION"],
    "descripcion_ing"   =>  $row["NEG_DESCRIPCION_ING"],
    "maps"              =>  $row["NEG_MAP"],
    "ciudad"            =>  $row["NEG_LUGAR"],
    "facebook"          =>  $row["NEG_FACEBOOK"],
    "instagram"         =>  $row["NEG_INSTAGRAM"],
    "web"               =>  $row["NEG_WEB"], 
    "horario_esp"       =>  $row["NEG_HORARIO"],
    "horario_ing"       =>  $row["NEG_HORARIO_ING"],
    "estatus"           =>  $row["NEG_ESTATUS"],
    "subcategoria"      =>  $row["ID_SUBCATEGORIA"],    
    "etiquetas_esp"     =>  $row["NEG_ETIQUETAS"],
    "etiquetas_ing"     =>  $row["NEG_ETIQUETAS_ING"],


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