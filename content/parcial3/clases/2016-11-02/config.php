<?php
  $conn = new mysqli("localhost", "1018057_user", "1018057", "daw_1018057");
  if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
  }
?>
