<?php
// Archivo: db.php
$host = 'localhost';
$usuario = 'root'; // Usuario por defecto
$contraseña = '12345678'; // Sin contraseña por defecto
$base_de_datos = 'gestion_clientes'; // base de datos

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
