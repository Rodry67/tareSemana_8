<?php
$servername = "localhost";
$username = "root";
$password = ""; // Si no has cambiado la contraseña de MySQL, déjalo en blanco
$dbname = "AGENCIA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
