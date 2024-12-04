<?php
include 'db.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];

    // Actualizar los datos en la base de datos
    $sql = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', direccion='$direccion', ciudad='$ciudad' WHERE id_cliente=$id_cliente";

    if ($conexion->query($sql) === TRUE) {
        echo "Cliente actualizado exitosamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
