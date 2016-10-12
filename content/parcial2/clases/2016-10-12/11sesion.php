<?php
  session_start();
  if ($_SESSION['authuser'] != 1) {
    echo "No cuentas con los permisos necesarios para acceder a esta vista";
    exit();
  }
?>

<!doctype html>
<html>
<head>
  <title>
    Bienvenido
    <?php echo $_REQUEST['nombre']; ?>
  </title>
</head>
<body>
  <?php
    echo "Bienvenido al sistema de administracion de vehiculos.";
    echo $_COOKIE['username'];
    echo "!<br />";
    echo "Esta visualizacion es realizada para: ";
    echo $_REQUEST['nombre'];
    echo "<br />";
  ?>
</body>
</html>
