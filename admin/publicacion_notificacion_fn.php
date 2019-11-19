<?php
require "conexion.php";

$id=$_GET['id'];

require "conexion.php";
$empresa="SELECT n.ID_NEGOCIO, p.ID_PUBLICACION, g.GAL_FOTO, g.GAL_FOTO_ING, p.PUB_TITULO,p.PUB_DETALLE,p.PUB_TITULO_ING,p.PUB_DETALLE_ING
FROM negocios n, subcategoria s, galeria g , categorias c, publicacion p
WHERE n.ID_SUBCATEGORIA = s.ID_SUBCATEGORIA
and c.ID_CATEGORIA =s.ID_CATEGORIA
and p.negocios_ID_NEGOCIO = n.ID_NEGOCIO
and n.ID_NEGOCIO = g.ID_NEGOCIO
and p.galeria_ID_GALERIA = g.ID_GALERIA
and g.GAL_TIPO='Publicacion'
and p.PUB_TIPO is not null
and n.NEG_ESTATUS='A'
and p.PUB_ESTATUS='A'
and p.ID_PUBLICACION=$id";

//HConsulta y obtengo los datos
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$idn           = $fila['ID_NEGOCIO'];
$idp           = $fila['ID_PUBLICACION'];
$destino2      = $fila['GAL_FOTO'];
$destino3      = $fila['GAL_FOTO_ING'];
$titu          = $fila['PUB_TITULO'];
$titulo_ing    = $fila['PUB_TITULO_ING'];
$deta          = $fila['PUB_DETALLE'];
$detalle_ing   = $fila['PUB_DETALLE_ING'];

}
//printf($titu);

$curl = curl_init();

$fields ="{ \r\n \t\"notification\": { \r\n \t\"title\":\"$titu\",\r\n\t\"body\":\"$deta\",\r\n\t\"icon\":\"launcher_icon\",\r\n\t\"image\":\"$destino2\",\r\n\t\"click_action\": \"FLUTTER_NOTIFICATION_CLICK\"\r\n },\r\n \"data\": {\r\n \t\"id_n\": \"$idn\",\r\n \t\"id\": \"$idp\" \r\n }\r\n \"to\" : \"/topics/Todos\",\r\n } \r\n";
//$fields ="{ \r\n \t\"notification\": { \r\n \t\"title\":\"$titu\",\r\n\t\"body\":\"$deta\",\r\n\t\"icon\":\"launcher_icon\",\r\n\t\"image\":\"$destino2\",\r\n\t\"click_action\": \"FLUTTER_NOTIFICATION_CLICK\"\r\n },\r\n \"data\": {\r\n \t\"id_n\": \"$idn\",\r\n \t\"id\": \"$idp\" \r\n }\r\n \"to\" : \"/topics/Todos\",\r\n }";
$fields1 ="{ \r\n \t\"notification\": { \r\n \t\"title\":\"$titulo_ing\",\r\n\t\"body\":\"$detalle_ing\",\r\n\t\"icon\":\"launcher_icon\",\r\n\t\"image\":\"$destino3\",\r\n\t\"click_action\": \"FLUTTER_NOTIFICATION_CLICK\"\r\n },\r\n \"data\": {\r\n \t\"id_n\": \"$idn\",\r\n \t\"id\": \"$idp\" \r\n }\r\n \"to\" : \"/topics/All\",\r\n } \r\n";
//$fields1="{ \r\n \t\"notification\": { \r\n \t\"title\":\"$titulo_ing\",\r\n\t\"body\":\"$detalle_ing\",\r\n\t\"icon\":\"launcher_icon\",\r\n\t\"image\":\"$destino2\",\r\n\t\"click_action\": \"FLUTTER_NOTIFICATION_CLICK\"\r\n },\r\n \"data\": {\r\n \t\"id_n\": \"$idn\",\r\n \t\"id\": \"$idp\" \r\n }\r\n \"to\" : \"/topics/All\",\r\n }";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST", 
  CURLOPT_POSTFIELDS => "$fields",
  CURLOPT_POSTFIELDS => "$fields1",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: key=AAAAwmPVOw4:APA91bG920bjf9iXVL3VqxR2RVn-sNqnheWy3VNSR4qMN7RxVYqgYh4sd3btURTSR1CZzLDpDM5mD4gRD6TpTiW_SrE-5J2uirQBSsqEFdMcDonDhdHhzHbW8YJBcwVXM_dPoHVNDH3Y",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
    "Host: fcm.googleapis.com",
    //"Postman-Token: 29c8d55a-0663-4535-bbe9-8b0635f20afc,ddbd8b29-05a5-4ac0-80d8-98a3f9d137c9",
    //"User-Agent: PostmanRuntime/7.19.0",
    //"cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  echo "<script> window.location='publicaciones.php'</script>;";
}