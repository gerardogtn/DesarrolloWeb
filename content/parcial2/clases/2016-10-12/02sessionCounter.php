<?php
  session_start('counter');
  echo '<a href="' . $_SERVER["PHP_SELF"] . '?' . SID . '">Contador vale: ' . ++$_SESSION['counter'] . '</a>';
?>
