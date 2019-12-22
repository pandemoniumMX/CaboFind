<?php
include '../../../conn.php';
$sql=$conn->query("SELECT n.ID_NEGOCIO,n.NEG_NOMBRE,n.NEG_DESCRIPCION_ING, n.NEG_MAP, n.NEG_LUGAR,n.NEG_FACEBOOK,n.NEG_INSTAGRAM,n.NEG_WEB, c.CAT_NOMBRE_ING,s.SUB_NOMBRE_ING, g.GAL_FOTO,n.NEG_TEL, n.NEG_CORREO, n.NEG_HORARIO_ING    
FROM negocios n, subcategoria s, galeria g , categorias c, neg_exp ne, exposicion e
WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
and c.ID_CATEGORIA =s.ID_CATEGORIA
and g.ID_NEGOCIO=n.ID_NEGOCIO 
and n.ID_NEGOCIO =ne.negocios_ID_NEGOCIO
and g.GAL_TIPO='Logo'
and s.SUB_NOMBRE='Oriental'
and c.CAT_NOMBRE='Restaurantes'
and n.NEG_ESTATUS='A'
and n.NEG_INGLES='True'
and ne.exposicion_ID_EXPOSICION='2'
GROUP BY n.NEG_FECHA
ORDER BY n.NEG_FECHA DESC

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