<?php
  session_start();

   if ($_SESSION['authuser'] != 1) {
      echo "Lo siento mucho, pero no tienes los premisos necesarios para ver este CV!";
      exit();
   }
?>

<html>
<head>
  <title>Curr&iacute;culo Vitae de -
    <?php echo $_REQUEST['nombre']; ?>
  </title>
</head>
<body>
  <?php
    echo "Bienvenido al sitio de reclutamiento, ";
    echo $_SESSION['username'];
    echo "! <br>";
    echo "Este curr&iacute;culo vitae le pertenece a: ";
    echo $_REQUEST['nombre'];
    echo "<br>";
    $grado = "Ph.D.";
    echo "El grado de este usuario es de: ";
    echo $grado;
    ?>
</body>
</html>
