<?php
include '../../..conn.php';


$sql=$conn->query("SELECT n.ID_NEGOCIO,n.NEG_NOMBRE,n.NEG_DESCRIPCION_ING, n.NEG_MAP,n.NEG_LUGAR,n.NEG_FACEBOOK,n.NEG_INSTAGRAM,n.NEG_WEB, c.CAT_NOMBRE_ING,s.SUB_NOMBRE_ING, g.GAL_FOTO  
FROM negocios n, subcategoria s, galeria g , categorias c
WHERE n.ID_SUBCATEGORIA=s.ID_SUBCATEGORIA 
and c.ID_CATEGORIA = s.ID_CATEGORIA
and g.ID_NEGOCIO=n.ID_NEGOCIO 
and g.GAL_TIPO='Logo'
and s.SUB_NOMBRE IS NOT NULL
and c.CAT_NOMBRE IS NOT NULL
ORDER BY n.NEG_FECHA ASC

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