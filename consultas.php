<?php
include'conexion.php';

$slide = "SELECT  @row := @row + 1 as row, PUB_TITULO, PUB_DETALLE, GAL_FOTO
FROM publicacion a, galeria g, negocios n, (SELECT @row := 0) r
where n.ID_NEGOCIO = g.ID_NEGOCIO
AND a.galeria_ID_GALERIA = g.ID_GALERIA
 LIMIT 4";

 $post = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.ID_NEGOCIO, n.NEG_NOMBRE, g.GAL_FOTO
 FROM publicacion p, galeria g, negocios n
 WHERE g.GAL_TIPO = 'Publicacion'
 AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
  LIMIT 4;";

  $post2 = "SELECT p.PUB_TITULO, n.ID_NEGOCIO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO
  FROM publicacion p, galeria g, negocios n
  WHERE g.GAL_TIPO = 'Publicacion'
  AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
  LIMIT 4";

//consulta de subcategorias
  $cat_descubre = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 63';
  $ejec_desc = mysqli_query($conn, $cat_descubre);

  $cat_vidn = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 62';
  $ejec_vidn = mysqli_query($conn, $cat_vidn);

  $cat_rest = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 60';
  $ejec_rest = mysqli_query($conn, $cat_rest);

  $cat_comp = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 61';
  $ejec_comp = mysqli_query($conn, $cat_comp);

  $cat_serv = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 59';
  $ejec_serv = mysqli_query($conn, $cat_serv);

  $cat_salu = 'SELECT * FROM SUBCATEGORIA WHERE ID_CATEGORIA = 69';
  $ejec_salu = mysqli_query($conn, $cat_salu);


?>
