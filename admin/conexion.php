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

/*<?php
$servername = "localhost";
$username = "cabofind";
$password = "Hesoyam01.";
$dbname = "cabofind_cabofind";
// Crear connection
$conn = @mysqli_connect($servername, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8mb4");


//echo "Connected successfully";

?>
*/
?>


