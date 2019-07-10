<?php
include'check_sesion.php';
include'conexion.php';
//if(isset($_POST['submit']))
//{
if ( (isset($_POST['user'])) || (isset($_POST['pass'])) ){
    $var_user = $_POST['user'];
	$var_contra = md5($_POST['pass']);
$consulta = "SELECT * FROM usuario WHERE USER ='$var_user' AND PASSWORD = '$var_contra'";
$resultado = $conn->query($consulta);
if($resultado->num_rows > 0){
	while($row = $resultado->fetch_assoc()) {
	$var_nombre = $row["USER"];
	$tipo = $row["USU_TIPO"];
	//Aspirantes
  		$_SESSION['clave'] = $row["ID_USER"];
  	    $_SESSION['nombre']=$var_nombre;
        $_SESSION['tipo'] = $row["USU_TIPO"];
		echo "<script>window.open('checkin_empleados.php','_self')</script>";
}
//aqui termina el while
	}else{
    echo "<script>alert('Usuario o contraseña invalidos!')</script>";
		echo "<script>window.open('index.html','_self')</script>";
	}
}
//} else{
//}
?>
<head>
     <link rel="stylesheet" media="screen" type="text/css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
