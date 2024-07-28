<?php
include 'config.php';


$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = "SELECT * FROM VUELOS WHERE fecha BETWEEN ? AND ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $fecha_inicio, $fecha_fin);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 1) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_vuelo"]."</td><td>".$row["origen"]."</td><td>".$row["destino"]."</td><td>"
        .$row["fecha"]."</td><td>".$row["plazas_disponibles"]."</td><td>".$row["precio"]."</td></tr>"; 
    }
} else {
    echo "No se encontraron resultados";
}

$stmt->close();
$conn->close();
?>
