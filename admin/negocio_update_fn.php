<?php

include 'conexion.php';
$id_n = $_POST ['id_n'];
$nombre = $_POST ['nombre'];
$correo1 = $_POST ['correo1'];
$telefono1 = $_POST ['telefono1'];
$telefono_res1 = $_POST ['telefono_res1'];
$direccion1 = $_POST ['direccion1'];
$ciudad1 = $_POST ['ciudad1'];
$descripcion_esp1 = $_POST ['descripcion_esp1'];
$descripcion_ing1 = $_POST ['descripcion_ing1'];
$nom_resp1 = $_POST ['nom_resp1'];
$estatus1 = $_POST ['estatus1'];
$etiquetas_esp1 = $_POST ['etiquetas_esp1'];
$etiquetas_ing1 = $_POST ['etiquetas_ing1'];
$maps = $_POST ['maps'];
$maps_ing = $_POST ['maps_ing'];
$facebook1 = $_POST ['facebook1'];
$instagram1 = $_POST ['instagram1'];
$web1 = $_POST ['web1'];
$horario_esp1 = $_POST ['horario_esp1'];
$horario_ing1 = $_POST ['horario_ing1'];
$ingles1 = $_POST ['ingles1'];
$subcategoria1 = $_POST ['subcategoria1'];



 //inserta la publicación nueva
 $sql2 = "UPDATE negocios SET NEG_NOMBRE ='$nombre',NEG_CORREO='$correo1',NEG_TEL='$telefono1',NEG_TEL_RESP='$telefono_res1',NEG_DIRECCION='$direccion1',
 NEG_DESCRIPCION='$descripcion_esp1',NEG_DESCRIPCION_ING='$descripcion_ing1',NEG_RESPONSABLE='$nom_resp1',NEG_ESTATUS ='$estatus1'
 ,NEG_ETIQUETAS='$etiquetas_esp1',NEG_ETIQUETAS_ING ='$etiquetas_ing1'
 ,NEG_MAP='$maps',NEG_MAP_IOS ='$maps_ing'
 ,NEG_FACEBOOK='$facebook1',NEG_INSTAGRAM ='$instagram1'
 ,NEG_WEB='$web1',NEG_HORARIO ='$horario_esp1'
 ,NEG_HORARIO_ING='$horario_ing1',NEG_INGLES ='$ingles1'
 ,ID_SUBCATEGORIA ='$subcategoria1'
  WHERE ID_NEGOCIO='$id_n';";

 $res = $conn->query($sql2);
echo "<script> window.location='index.php'</script>;";
  

 //consulta publicación recien insertada para anidarla a la imagen en galeria
 
 





//}

//echo "Titulo de publicación ya existente";
//echo "<script> window.location='index.php'</script>;";
?>
