<?php
include 'db.php'; // Incluir la conexión a la base de datos

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO cliente (nombre,apellido,correo,telefono,direccion,ciudad, contraseña) VALUES ('$nombre','$apellido', '$correo','$telefono','$direccion','$ciudad', '$contraseña')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>
