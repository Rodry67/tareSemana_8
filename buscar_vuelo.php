<?php
include 'config.php';

$id = $_POST['id'];

$sql = "SELECT * FROM VUELOS WHERE id_vuelo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $id);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows>0) {
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