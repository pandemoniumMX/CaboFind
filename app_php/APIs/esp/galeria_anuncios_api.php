<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT * FROM `galeria` where GAL_TIPO='GALERIA' and GAL_ESTATUS='A' AND anuncios_ID_ANUNCIOS='$ID'");

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