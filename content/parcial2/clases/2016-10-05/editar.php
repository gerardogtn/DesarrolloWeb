<!doctype html>
<?php
  include_once('config.php');
  $id = $_REQUEST["id"];
  $vehicule = mysqli_query($mysql, "SELECT * FROM Vehiculo WHERE id = " . $id);
  $tag;
  $placas;
  $puntoAcceso;
  while ($v = mysqli_fetch_array($vehicule)) {
    $tag = $v['tag'];
    $placas = $v['placas'];
    $puntoAcceso = $v['punto_entrada'];
  }
?>
<html>
<head> 
  <?php
    if (!empty($tag)) {
      echo "<title>$id</title>";
    } else {
      echo "<title>No vehicule found!</title>";
    }
  ?>
</head>
<body>
  <?php
    if (!empty($tag)) {
      print "<h1>Modificar</h1>";
      print "<form>";
      print '<label>Tag<input id="tag" type="text" value="'. $tag . '"/></label>';
      print '<label>Placas<input id="placas" type="text" value="' . $placas . '"/></label>';
      print '<label>Punto de entrada<input id="punto_entrada" type="text" value="' . $puntoAcceso . '"/></label>';
      print '</form>';
    } else {
      echo '<h1>No encontramos el vehiculo</h1>';
    }
  ?>
</body>
</html>
