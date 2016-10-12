<?php
$PHPSESSID = session_id();
echo "<form action='06recibirSesion.php' method='POST'>
        <input type='hidden' name='PHPSESSID' value='$PHPSESSID'>
        <input type='submit' value='Siguiente pagina'>
      </form>";
?>
