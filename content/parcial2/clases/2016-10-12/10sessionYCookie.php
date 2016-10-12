<?php
  setcookie('username', 'raulms', time()+30);
  session_start();
  $_SESSION['authuser'] = 1;
?>

<html>
<head>
  <title>Administrar contenido</title>
</head>
<body>
  <?php
    $nombre = urlencode("Gerardo Teruel");
    echo "<a href='11sesion.php?nombre=$nombre'>";
    echo "Haz click aqui para ver los vehiculos registrados!";
    echo "</a>";
  ?>
</body>
</html>
