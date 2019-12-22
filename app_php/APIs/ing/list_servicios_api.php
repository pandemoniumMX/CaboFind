<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT c.SERV_NOMBRE_ING,n_c.servicios_ID_SERVICIOS, n_c.negocios_ID_NEGOCIO
FROM neg_serv n_c , servicios c
WHERE n_c.servicios_ID_SERVICIOS=c.ID_SERVICIOS 
and n_c.negocios_ID_NEGOCIO='$ID'
AND c.SERV_ESTATUS='A'
ORDER BY c.SERV_NOMBRE_ING ASC

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