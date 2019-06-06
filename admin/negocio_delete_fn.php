<?PHP
require 'conexion.php';
$response = array();

if ($_POST['delete']) {

    $id = $_POST['delete'];
    $query = "DELETE FROM galeria WHERE ID_NEGOCIO='$id';";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $query2 = "DELETE FROM negocios WHERE ID_NEGOCIO='$id';";
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
