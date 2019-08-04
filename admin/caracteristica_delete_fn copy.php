<?PHP
require 'conexion.php';
$response = array();

if ($_POST['delete']) {

    $id = $_POST['delete'];
    $query2 = "DELETE FROM Caracteristicas WHERE ID_CARACTERISTICAS='$id';";
    $stmt2 = $conn->prepare($query2);
    $stmt2->execute();

    if ($stmt2) {
        $response['status']  = 'success';
 $response['message'] = 'eliminado correctamente ...';

    } else {
        $response['status']  = 'error';
 $response['message'] = 'Imposible borrar ...';
    }
    echo json_encode($response);
}
