<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT c.CAR_NOMBRE,n_c.caracteristicas_ID_CARACTERISTICAS, n_c.negocios_ID_NEGOCIO,n_c.NEG_CAR_ESTATUS
FROM neg_car n_c , caracteristicas c
WHERE n_c.caracteristicas_ID_CARACTERISTICAS=c.ID_CARACTERISTICAS 
and n_c.negocios_ID_NEGOCIO='$ID'
and n_c.NEG_CAR_ESTATUS='A'

ORDER BY c.CAR_NOMBRE ASC

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