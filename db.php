<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
