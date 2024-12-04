<?php
// Verificar si los datos se enviaron correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $nombre_cliente = isset($_POST['cliente']) ? $_POST['cliente'] : '';
    $tipo_cliente = isset($_POST['tipo_cliente']) ? $_POST['tipo_cliente'] : '';
    $total_compra = isset($_POST['total_compra']) ? $_POST['total_compra'] : 0;

    // Validar que los campos no estén vacíos
    if (empty($nombre_cliente) || empty($tipo_cliente) || $total_compra <= 0) {
        echo "Por favor, complete todos los campos correctamente.";
        exit();
    }

    // Inicializar descuento
    $descuento = 0;

    // Aplicar descuentos según el tipo de cliente
    switch ($tipo_cliente) {
        case 'Permanente':
            $descuento = 0.10;
            break;
        case 'Periodico':
            $descuento = 0.05;
            break;
        case 'Casual':
            $descuento = 0.02;
            break;
        case 'Nuevo':
            $descuento = 0;
            break;
        default:
            echo "Tipo de cliente no válido.";
            exit();
    }

    // Si la compra supera los 100,000, aplicar descuento adicional del 2%
    if ($total_compra > 100000) {
        $descuento += 0.02;
    }

    // Calcular total con descuento
    $total_descuento = $total_compra * $descuento;
    $total_final = $total_compra - $total_descuento;

    // Mostrar el resultado de la cotización
    echo "<h2>Cotización para $nombre_cliente</h2>";
    echo "Tipo de cliente: $tipo_cliente<br>";
    echo "Total de la compra: $$total_compra<br>";
    echo "Descuento aplicado: $" . number_format($total_descuento, 2) . "<br>";
    echo "Total final a pagar: $" . number_format($total_final, 2);

} else {
    echo "No se recibieron datos.";
}
?>

