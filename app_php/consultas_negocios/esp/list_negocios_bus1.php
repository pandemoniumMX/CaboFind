<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT n.ID_NEGOCIO,n.NEG_NOMBRE,n.NEG_DESCRIPCION,n.NEG_ETIQUETAS, n.NEG_MAP,n.NEG_LUGAR,n.NEG_FACEBOOK,n.NEG_INSTAGRAM,n.NEG_WEB, c.CAT_NOMBRE,s.SUB_NOMBRE, g.GAL_FOTO  
FROM negocios n, subcategoria s, galeria g , categorias c
WHERE n.ID_SUBCATEGORIA=s.ID_SUBCATEGORIA 
and c.ID_CATEGORIA = s.ID_CATEGORIA
and g.ID_NEGOCIO=n.ID_NEGOCIO 
and g.GAL_TIPO='Logo'
and s.SUB_NOMBRE IS NOT NULL
and c.CAT_NOMBRE IS NOT NULL
and n.NEG_ESTATUS='A'  
ORDER BY `n`.`NEG_NOMBRE`  ASC
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