<?php
include 'config.php';

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones_disponibles = $_POST['habitaciones_disponibles'];
$tarifa_noche = $_POST['tarifa_noche'];

// Validar datos
if (empty($nombre) || empty($ubicacion) || empty($habitaciones_disponibles) || empty($tarifa_noche)) {
    die("Por favor, complete todos los campos.");
}

$sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $nombre, $ubicacion, $habitaciones_disponibles, $tarifa_noche);

if ($stmt->execute()) {
    echo "Hotel agregado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
