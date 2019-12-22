 <?php
include '../../conn.php';


    $ID_FB=$_GET['ID_FB'];
    $NOM=$_GET['NOM'];
    $APE=$_GET['APE'];
    $CORREO=$_GET['CORREO'];
    $FOTO=$_GET['FOTO'];
    $IDIOMA=$_GET['IDIOMA'];
    $RESENA=$_GET['RESENA'];
    $VALOR=$_GET['VALOR'];
    $ID_N=$_GET['ID_N'];

         $sql2 = "INSERT INTO `com_neg` (COM_ID,COM_NOMBRES,COM_APELLIDOS,COM_CORREO,COM_FOTO, COM_IDIOMA, COM_RESENA, COM_VALOR,COM_ESTATUS,negocios_ID_NEGOCIO) 
         VALUES ('$ID_FB','$NOM','$APE','$CORREO','https://graph.facebook.com/$ID_FB/picture?type=large','$IDIOMA','$RESENA','$VALOR','A','$ID_N');";
        $res = $conn->query($sql2);
        
     
   
   echo json_encode($response);

?>