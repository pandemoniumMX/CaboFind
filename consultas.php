<?php
include'conexion.php';

$slide = "SELECT  @row := @row + 1 as row, PUB_TITULO, PUB_DETALLE, GAL_FOTO
FROM publicacion a, galeria g, negocios n, (SELECT @row := 0) r
where n.ID_NEGOCIO = g.ID_NEGOCIO
AND a.galeria_ID_GALERIA = g.ID_GALERIA
 LIMIT 4";

 $sliderp = "SELECT p.PUB_FECHA, p.PUB_TITULO, p.PUB_DETALLE, n.ID_NEGOCIO, n.NEG_NOMBRE, g.GAL_FOTO
 FROM publicacion p, galeria g, negocios n
 WHERE g.GAL_TIPO = 'Publicacion'
 AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
 AND G.ID_NEGOCIO = N.ID_NEGOCIO
 AND P.galeria_ID_GALERIA = G.ID_GALERIA
 ORDER BY PUB_FECHA ASC
  LIMIT 4;";

  $todop = "SELECT p.PUB_FECHA, p.PUB_TITULO, p.PUB_DETALLE, n.ID_NEGOCIO, n.NEG_NOMBRE, g.GAL_FOTO
 FROM publicacion p, galeria g, negocios n
 WHERE g.GAL_TIPO = 'Publicacion'
 AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
 AND G.ID_NEGOCIO = N.ID_NEGOCIO
 AND P.galeria_ID_GALERIA = G.ID_GALERIA
 ORDER BY PUB_FECHA ASC
  LIMIT 4";

   $actvp1 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 63
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 1";

   $actvp2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 63
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 4";

   $actnp1 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 62
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 1";

   $actnp2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 62
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 4";

   $shopp1 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 61
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 1";

   $shopp2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n, subcategoria s, categorias c
   WHERE g.GAL_TIPO = 'Publicacion'
   AND s.ID_CATEGORIA = 61
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND c.ID_CATEGORIA = s.ID_CATEGORIA
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 4";

   $eventp1 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n
   WHERE g.GAL_TIPO = 'Publicacion'
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
   LIMIT 1";

   $eventp2 = "SELECT p.PUB_TITULO, p.PUB_DETALLE, n.NEG_NOMBRE, g.GAL_FOTO, p.PUB_FECHA
   FROM publicacion p, galeria g, negocios n
   WHERE g.GAL_TIPO = 'Publicacion'
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_GALERIA = p.galeria_ID_GALERIA
   AND n.ID_NEGOCIO = p.negocios_ID_NEGOCIO
   ORDER BY PUB_FECHA ASC
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
