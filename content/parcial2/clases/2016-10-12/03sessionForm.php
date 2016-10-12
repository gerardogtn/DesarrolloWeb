<?php
  session_start();
?>
<html>
<head>
  <title>Prueba de sesiones</title>
</head>
<body>
  <?php
    $_SESSION['session_var'] = "prueba";
    echo "Esto es una prueba de sesiones.
          <form action='04recibirSesion.php' method='POST'>
            <input type='hidden' name='var_forma' value='probando' />
            <input type='submit' value='Ir a la siguiente p&aacute;gina' />
          </form>\n";
  ?>
</body>
</html>
