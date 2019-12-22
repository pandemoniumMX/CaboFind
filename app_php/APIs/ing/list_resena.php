<?php
include '../../conn.php';

$ID=$_GET['ID'];

$sql=$conn->query("SELECT * FROM com_neg 
WHERE negocios_ID_NEGOCIO =$ID
and COM_ESTATUS ='A'
and COM_IDIOMA ='ING';
");
$result=array();

while($fetchdata=$sql->fetch_assoc()) {
    $result[]=$fetchdata;

     }

echo json_encode($result);
?> 