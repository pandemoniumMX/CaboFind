<?php
$servername = "localhost";
$username = "cabofind";
$password = "6241543710";
$dbname = "cabofind_cabofind";


// Crear connection
$conn = @mysqli_connect($servername, $username, $password, $dbname);
return $conn;
// revisar connection

?>
