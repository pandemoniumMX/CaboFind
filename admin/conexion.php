<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabofind_cabofind";


// Crear connection
$conn = @mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8mb4");

return $conn;
// revisar connection
?>
