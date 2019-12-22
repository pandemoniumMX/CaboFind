<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT n.ID_NEGOCIO,p.ID_PUBLICACION,n.NEG_NOMBRE, n.NEG_LUGAR,n.NEG_FACEBOOK,n.NEG_INSTAGRAM,n.NEG_WEB, c.CAT_NOMBRE_ING,s.SUB_NOMBRE_ING, g.GAL_FOTO, p.PUB_TITULO_ING,p.PUB_DETALLE_ING,p.PUB_FECHA,p.PUB_VIDEO,n.NEG_TEL, n.NEG_CORREO, n.n.NEG_HORARIO_ING
FROM negocios n, subcategoria s, galeria g , categorias c, publicacion p
WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
and c.ID_CATEGORIA =s.ID_CATEGORIA
and p.negocios_ID_NEGOCIO = n.ID_NEGOCIO
and n.ID_NEGOCIO = g.ID_NEGOCIO
and p.galeria_ID_GALERIA = g.ID_GALERIA
and g.GAL_TIPO='Publicacion'
and n.ID_NEGOCIO='$ID'

ORDER BY p.PUB_FECHA DESC

");
$result=array();

while($fetchdata=$sql->fetch_assoc()) {
    $result[]=$fetchdata;

     }

echo json_encode($result);
?> 