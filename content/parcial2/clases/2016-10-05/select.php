<?php
// Creamos conexion
$conn = new mysqli("localhost", "1018057_user", "1018057", "daw_1018057");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
} 
// hacemos el query
$sql = "SELECT id, nombre, apellido_paterno apellido_materno FROM Usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // obtenemos los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido_paterno"]. " " . $row["apellido_materno"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

