<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT n.ID_NEGOCIO, n.NEG_NOMBRE, n.NEG_RAZONSOCIAL, n.NEG_RFC ,n.NEG_DIRECCION, n.NEG_DESCRIPCION, n.NEG_ETIQUETAS, n.NEG_ESTATUS, c.ID_RAMO, c.ID_CATEGORIA, s.ID_SUBCATEGORIA, u.ID_USUARIO FROM negocios n, categorias c, subcategoria s, usuarios u WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA and s.ID_CATEGORIA = c.ID_CATEGORIA and n.ID_NEGOCIO=$id and n.ID_NEGOCIO = u.ID_NEGOCIO ";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "id"        =>  $row["ID_NEGOCIO"],
    "nom"       =>  $row["NEG_NOMBRE"],
    "raz"        =>  $row["NEG_RAZONSOCIAL"],
    "rfc"         =>  $row["NEG_RFC"],    
    "res"        =>  $row["ID_USUARIO"],
    "dir"       =>  $row["NEG_DIRECCION"],
    "des"        =>  $row["NEG_DESCRIPCION"],
    "eti"         =>  $row["NEG_ETIQUETAS"], 
    "est"        =>  $row["NEG_ESTATUS"],
    "ram"       =>  $row["ID_RAMO"],
    "cat"        =>  $row["ID_CATEGORIA"],
    "sub"         =>  $row["ID_SUBCATEGORIA"], 

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
