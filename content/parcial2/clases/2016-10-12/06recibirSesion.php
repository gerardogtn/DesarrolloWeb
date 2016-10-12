<?php
  session_start();

  $_SESSION['username'] = "ggtn";
  $_SESSION['authuser'] = 1;
?>

<html>
<head>
  <title>Ingresa CV</title>
</head>
<body>
  <?php
    $nombre = urlencode("Gerardo Teruel");
    echo "<a href='07query.php?nombre=$nombre'>";
    echo "Haz click aqu&iacute; para ver el CV";
    echo "</a>\n";
  ?>
</body>
</html>
