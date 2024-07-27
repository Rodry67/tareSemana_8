<?php include 'config.php'; 
echo "<h1>Tabla de Reserva</h1>";
$result = $conn->query("SELECT * FROM RESERVA");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Reserva</th><th>ID Cliente</th><th>Fecha_Reserva</th><th>ID_Vuelo</th><th>ID_Hotel</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_reserva"]."</td><td>".$row["id_cliente"]."</td><td>".$row["fecha_reserva"]."</td>
        <td>".$row["id_vuelo"]."</td><td>".$row["id_hotel"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay vuelos disponibles.";
}

$conn->close();
?>