<?php

require "conexion.php";

$idp = $_GET ['id'];

$empresa="SELECT n.ID_NEGOCIO, p.ID_PUBLICACION, g.GAL_FOTO, p.PUB_TITULO,p.PUB_DETALLE,p.PUB_TITULO_ING,p.PUB_DETALLE_ING
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
and p.ID_PUBLICACION='$idp'";

$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$titu          = $fila['PUB_TITULO'];
$titulo_ing          = $fila['PUB_TITULO_ING'];
$deta          = $fila['PUB_DETALLE'];
$detalle_ing          = $fila['PUB_DETALLE_ING'];
$imagen          = $fila['GAL_FOTO'];

}



//notificacion publicacion sin enviar valores
define( 'API_ACCESS_KEY', 'AAAAwmPVOw4:APA91bHRSlozkMrxPPNNnvOuRNF9-y6jmNhxBBJo4F5zkn2ENHd1TC1yqJ7J3UmWJNQVIZ0PpW84XlrGr4pxDI7VXjotEGpyu4gnAfg3R1wTgd_5nE323jFvZkZBn38MGu_kwMQispvN');
 //   $registrationIds = ;
#prep the bundle
     $msg = array
          (
		
	    'title'	=> "$titu",
            'body' 	=> "$deta",		
            'icon'  => 'launcher_icon',
            //"icon" => "ic_launcher",
            'image'	=> "$destino2",		
             	
		  );
		  $msg1 = array
          (
		
	    'title'	=> "$titulo_ing",
            'body' 	=> "$detalle_ing",		
            'icon'  => 'launcher_icon',
            //"icon" => "ic_launcher",
            'image'	=> "$destino2",		
             	
          );
	$fields = array
			(
				'to' => "/topics/Todos",
				'notification'	=> $msg,
				
			);
	$fields2 = array
			(
				'to' => "/topics/All",
				'notification'	=> $msg1,
				
			);		
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields,$fields2 ) );
		$result = curl_exec($ch );
		echo $result;
		curl_close( $ch );

	echo $res2?'ok':'err';
	echo "<script> window.location='publicaciones.php'</script>;";

    if (!$res2) {
       printf("Errormessage: %s\n", $conn->error);
    }
