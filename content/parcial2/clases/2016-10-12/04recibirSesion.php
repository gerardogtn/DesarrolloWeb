<?php
  session_start();
?>
<html>
<head>
  <title>Recibir datos de sesion</title>
</head>
<body>
  <?php
    echo "session_var = {$_SESSION['session_var']}<br>\n";
    echo "var_forma = {$_POST['var_forma']}<br>\n"; 
  ?>
</body>
</html>
