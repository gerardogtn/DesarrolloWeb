<?php
  setcookie("ejemplo_usuario", $_GET['nombre'], time()+3600, "/", "");
?>

<!doctype html>
<html>
<head>
  <title>Ejemplo de procesar cookie</title>
</head>
<body>
  <h1>Ejemplo de procesamiento de cookies</h1>
  <p>
    Se ha establecido el valor de una cookie con nombre
    <b>ejemplo_usuario</b>
    con valor:
    <b> <?php echo $_GET['nombre']; ?> </b>
    valido por la siguiente hora
  </p>
</body>
