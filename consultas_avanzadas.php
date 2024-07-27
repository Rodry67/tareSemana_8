<?php
include 'config.php';

echo "<h1>Hoteles con más de 2 reservas</h1>";
$sql = "SELECT HOTEL.nombre, COUNT(RESERVA.id_reserva) AS num_reservas 
        FROM HOTEL 
        JOIN RESERVA ON HOTEL.id_hotel = RESERVA.id_hotel 
        GROUP BY HOTEL.id_hotel 
        HAVING num_reservas > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Nombre Hotel</th><th>Número de Reservas</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nombre"]."</td><td>".$row["num_reservas"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles con más de 2 reservas.";
}

$conn->close();
?>
