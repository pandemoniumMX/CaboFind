<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT NEG_HORARIO_ING
FROM negocios
WHERE ID_NEGOCIO='$ID'

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