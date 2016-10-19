<?php
  header('Content-Type: text/xml');

  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

  echo '<response>';

  $name = $_GET['name'];
  $names = array('mike', 'gerry', 'curiel');
  $estudiantes = array('alberto', 'emilio');

  // Convierte un string a su representacion en html (i.e. acepta acentos).
  $htmlName = htmlentities($name);

  if (in_array(strtolower($name), $names)) {
    echo 'Hola ' . $htmlName;
  } else if (in_array(strtolower($name), $estudiantes)) {
    echo 'Hola estudiantes: ' . $htmlName;
  } else if (trim($name) == '') {
    echo 'Por favor escribe un nombre';
  } else {
    echo $htmlName . ' no te conozco.';
  }

  echo '</response>';
?>
