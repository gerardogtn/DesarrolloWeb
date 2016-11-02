<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultados de votos</title>
  </head>
  <body>
    <?php
      include_once('config.php');

      $candidatoAvotar = $_REQUEST['voto'];
      $updateQuery = "UPDATE votos SET votos.votos = votos.votos + 1 WHERE id = '$candidatoAvotar';";
      $conn->query($updateQuery);

      $sql = "SELECT * FROM votos;";

      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        $candidato = $row['id'];
        $votos = $row['votos'];
        echo "<h3>$candidato</h1>\n";
        echo "<br></br>\n";
        echo "<p>$votos</p>\n";
      }

      $conn->close();
    ?>
  </body>
</html>
