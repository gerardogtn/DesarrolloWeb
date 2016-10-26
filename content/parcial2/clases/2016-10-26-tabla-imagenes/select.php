<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Imagenes</title>
  </head>
  <body>
    <?php
      include_once('config.php')

      $sql = "SELECT * FROM Images";

      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        echo "<h1>$id</h1>";
        echo '<br /><br />'
        echo '<img src="extrae.php?id=""'. $id .'"></img>';
      }

      conn->close();
    ?>
  </body>
</html>
