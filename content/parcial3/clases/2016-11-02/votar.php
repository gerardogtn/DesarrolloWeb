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

      echo "<table>\n"
      echo "<tr> <th></th> <th scope='col'>Numero de votos</th> </tr>\n"
      while($row = $result->fetch_assoc()) {
        $candidato = $row['id'];
        $votos = $row['votos'];
        echo "<tr>\n";
        echo "<th scope='row'>$candidato</th>\n";
        echo "<td>$votos</td>\n";
        echo "</tr>\n";
      }
      echo "</table>\n";

      $conn->close();
    ?>
  </body>
</html>
