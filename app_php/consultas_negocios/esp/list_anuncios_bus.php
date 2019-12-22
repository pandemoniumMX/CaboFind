<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT n.ID_ANUNCIOS,n.ANUN_TITULO,n.ANUN_TITULO_ING,n.ANUN_DESCRIPCION,n.ANUN_DESCRIPCION_ING, n.ANUN_VIDEO, n.ANUN_PRECIO,n.ANUN_PRECIO_USD,n.ANUN_ESTADO,n.ANUN_ESTADO_ING,n.ANUN_ETIQUETAS,n.ANUN_LUGAR,n.ANUN_MAP_GOOGLE,n.ANUN_MAP_IOS,n.ANUN_ESTATUS, an.ANUN_NOMBRE, an.ANUN_TELEFONO, an.ANUN_CORREO, g.GAL_FOTO, g.GAL_FOTO_ING, c.ANUN_CATEGORIA, c.ANUN_CATEGORIA_ING
FROM anuncios n, galeria g , anuncios_categoria c, anunciante an, anun_exp ne
WHERE n.anuncios_categoria_ID_ANUNCIOS_CAT = c.ID_ANUNCIOS_CAT
and g.anuncios_ID_ANUNCIOS=n.ID_ANUNCIOS
and n.ID_ANUNCIOS =ne.anuncios_ID_ANUNCIOS
and g.GAL_TIPO='Logo'
and c.ANUN_CATEGORIA IS NOT NULL
and n.ANUN_ESTATUS='A'
GROUP BY n.ANUN_TITULO
ORDER BY n.ANUN_TITULO ASC
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