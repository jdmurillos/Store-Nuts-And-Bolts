<?php
include 'db.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];

    // Eliminar cliente de la base de datos
    $sql = "DELETE FROM cliente WHERE id_cliente=$id_cliente";

    if ($conexion->query($sql) === TRUE) {
        echo "Cliente eliminado correctamente.";
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }
}
?>
