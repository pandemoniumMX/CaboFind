<?php
include 'conn.php';
$sql=$conn->query("SELECT n.ID_NEGOCIO, p.ID_PUBLICACION,n.NEG_NOMBRE, n.NEG_LUGAR,c.CAT_NOMBRE,s.SUB_NOMBRE, g.GAL_FOTO, p.PUB_TITULO,p.PUB_DETALLE,p.PUB_FECHA,p.PUB_VIDEO,n.NEG_TEL, n.NEG_CORREO, n.NEG_HORARIO
FROM negocios n, subcategoria s, galeria g , categorias c, publicacion p
WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
and c.ID_CATEGORIA =s.ID_CATEGORIA
and p.negocios_ID_NEGOCIO = n.ID_NEGOCIO
and n.ID_NEGOCIO = g.ID_NEGOCIO
and p.galeria_ID_GALERIA = g.ID_GALERIA
and g.GAL_TIPO='Publicacion'
and p.PUB_TIPO='Publicacion'
ORDER BY p.PUB_FECHA DESC

");
$result=array();

while($fetchdata=$sql->fetch_assoc()) {
    $result[]=$fetchdata;

     }

/*
while($fetchdata=$sql->fetch_assoc()){
	$result[]=$fetchdata;
}*/
echo json_encode($result);
?> 