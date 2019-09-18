<?php

require "conexion.php";
if(!empty($_POST['titulo']) || !empty($_POST['titulo_ing']) || !empty($_POST['detalle']) || !empty($_POST['detalle_ing']) || !empty($_POST['video']) || !empty($_POST['publicacion']) || !empty($_FILES['file']['name'])){


$titu = $_POST['titulo'];
$titulo_ing = $_POST['titulo_ing'];

$deta = $_POST['detalle'];
$detalle_ing = $_POST['detalle_ing'];

$video = $_POST['video'];
$publicacion = $_POST['publicacion'];


$id = $_POST['s_neg'];
$archivo1 = $_FILES['file']['tmp_name'];
//DESTINO DONDE SE GUARDA LA IMAGEN
$destino1 = "../assets/galeria/empresas/$id/".$_FILES['file']['name'];
//DESTINO QUE SE GUARDA EN LA BD
$destino2 = "http://cabofind.com.mx/assets/galeria/empresas/$id/".$_FILES['file']['name'];

//crea directorio si no existe.
$target_dir = "../assets/galeria/empresas/$id/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
move_uploaded_file($archivo1, $destino1);

//inserta la imagen en la galeria
$sql = "INSERT INTO galeria(GAL_FOTO ,GAL_TIPO, GAL_ESTATUS, ID_NEGOCIO)
VALUES ('$destino2', 'Publicacion','A', $id);";
$res = $conn->query($sql);

//consulta publicaci贸n recien insertada para anidarla a la imagen en galeria
$empresa="SELECT ID_GALERIA FROM galeria order by ID_GALERIA DESC limit 1";
$ejecutar = mysqli_query($conn, $empresa);
while($fila=mysqli_fetch_array($ejecutar)){
$id_g          = $fila['ID_GALERIA'];
}

//inserta datos de la publicacion
$sql3 = "INSERT INTO publicacion(PUB_TITULO ,PUB_TITULO_ING, PUB_DETALLE, PUB_DETALLE_ING, PUB_VIDEO, PUB_TIPO, PUB_ESTATUS, negocios_ID_NEGOCIO, galeria_ID_GALERIA)
VALUES ('$titu','$titulo_ing','$deta','$detalle_ing','$video','$publicacion','A', $id, $id_g);";
$res2 = $conn->query($sql3);

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
    if (!$res2) {
       printf("Errormessage: %s\n", $conn->error);
    }
}