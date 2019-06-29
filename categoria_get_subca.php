<?php

require 'conexion.php';

$return_arr = array();
if ($_POST['id'] > 8000) {

  $id = $_POST['id'];
  $post2 = "SELECT  n.NEG_NOMBRE, g.GAL_FOTO, n.NEG_DESCRIPCION, n.NEG_FECHA
  FROM  galeria g, negocios n, categorias c, subcategoria s
  WHERE g.ID_NEGOCIO = n.ID_NEGOCIO
  AND g.GAL_TIPO = 'Logo'
  AND c.ID_CATEGORIA = s.ID_CATEGORIA
  AND n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
  AND n.ID_SUBCATEGORIA = $id";
  $ejec3 = mysqli_query($conn, $post2);
  while($fila=mysqli_fetch_array($ejec3)){
  $n_nom           = $fila['NEG_NOMBRE'];
  $descrip        = $fila['NEG_DESCRIPCION'];
  $img         = $fila['GAL_FOTO'];
  $fech         = $fila['NEG_FECHA'];

    $return_arr[] = array("nom" => $n_nom,
                    "descrip" => $descrip,
                      "img" => $img,
                    "fecha" => $fech);
}
}else{
    $id = $_POST['id'];

    $post2 = "SELECT  n.NEG_NOMBRE, g.GAL_FOTO, n.NEG_DESCRIPCION, n.NEG_FECHA
    FROM  galeria g, negocios n, categorias c, subcategoria s
    WHERE g.ID_NEGOCIO = n.ID_NEGOCIO
    AND g.GAL_TIPO = 'Logo'
    AND c.ID_CATEGORIA = s.ID_CATEGORIA
    AND n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
    AND c.ID_CATEGORIA = $id";
    $ejec3 = mysqli_query($conn, $post2);
    while($fila=mysqli_fetch_array($ejec3)){
    $n_nom           = $fila['NEG_NOMBRE'];
    $descrip        = $fila['NEG_DESCRIPCION'];
    $img         = $fila['GAL_FOTO'];
    $fech         = $fila['NEG_FECHA'];

      $return_arr[] = array("nom" => $n_nom,
                      "descrip" => $descrip,
                        "img" => $img,
                      "fecha" => $fech);
}
}
// Encoding array in JSON format
echo json_encode($return_arr);
