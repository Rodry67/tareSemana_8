<?php
include 'config.php';

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas_disponibles = $_POST['plazas_disponibles'];
$precio = $_POST['precio'];

// Validar datos
if (empty($origen) || empty($destino) || empty($fecha) || empty($plazas_disponibles) || empty($precio)) {
    die("Por favor, complete todos los campos.");
}

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssii", $origen, $destino, $fecha, $plazas_disponibles, $precio);

if ($stmt->execute()) {
    echo "Vuelo agregado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
