<?php
include '../../conn.php';

$MOD=$_GET['MOD'];
//$BOOT=$_GET['BOOT'];


$sql=$conn->query("

INSERT INTO `trigger_info_device` (TID_MODELO,TID_BOOT) VALUES ('$MOD','BOOT')

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