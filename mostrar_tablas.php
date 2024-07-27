<?php
include 'config.php';

echo "<h1>Tabla de Vuelos</h1>";
$result = $conn->query("SELECT * FROM VUELO");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Vuelo</th><th>Origen</th><th>Destino</th><th>Fecha</th><th>Plazas Disponibles</th><th>Precio</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_vuelo"]."</td><td>".$row["origen"]."</td><td>".$row["destino"]."</td><td>".$row["fecha"]."</td><td>".$row["plazas_disponibles"]."</td><td>".$row["precio"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay vuelos disponibles.";
}

echo "<h1>Tabla de Hoteles</h1>";
$result = $conn->query("SELECT * FROM HOTEL");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Hotel</th><th>Nombre</th><th>Ubicación</th><th>Habitaciones Disponibles</th><th>Tarifa por Noche</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_hotel"]."</td><td>".$row["nombre"]."</td><td>".$row["ubicacion"]."</td><td>".$row["habitaciones_disponibles"]."</td><td>".$row["tarifa_noche"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles disponibles.";
}

$conn->close();
?>
