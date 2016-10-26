<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Image uploaded</title>
  </head>
  <body>
    <?php
      // Conexion a base de datos.
      $conn = new mysqli("localhost", "1018057_user", "1018057", "daw_1018057");
      if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
      }

      // Obtener datos de la url
      $image = $_FILES['image'];
      if (!isset($_FILES['image']) || $image['size'] <= 0) {
        echo "<h1>Please upload an image</h1>";
        exit();
      }

      $tmpImageName = $image['tmp_name'];
      $file = fopen($tmpImageName, 'r');
      $imageData = fread($file, filesize($tmpImageName));
      $imageData = addslashes($imageData); // Escapar caracteres especiales.
      fclose($file);

      // Query
      $sql = "INSERT INTO Images(imagen, type) VALUES('$imageData')";
      $result = $conn->query($sql);

      echo "<h1>File uploaded succesfully</h1>\n";
      echo "<p>The insertion query is:</p>\n";
      echo "<p>$sql</p>\n";
    ?>
  </body>
</html>
