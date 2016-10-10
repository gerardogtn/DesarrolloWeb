<!doctype html>
<?php
  include_once('config.php');
  $result = mysqli_query($mysql, 'SELECT * FROM Vehiculo ORDER BY id DESC');
?>

<html>
<head>
  <title>&Iacute;ndice de veh&iacute;culos</title>
</head>
<body>
  
  <table>
    <h1>Veh&iacute;culos</h1>
    <tr>
      <th>Tag</th>
      <th>Placas</th>
      <th>Punto entrada</th>
      <th>Operaciones</th>
    </tr>
    <?php
      while($vehicule = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $vehicule['tag'] . "</td>";
        echo "<td>" . $vehicule['placas'] . "</td>";
        echo "<td>" . $vehicule['punto_entrada'] . "</td>";
        $editar = "";
        $editar = $editar . '<td> <a href="editar.php?id=';
        $editar = $editar . $vehicule["id"]; 
        $editar = $editar . '">Editar </a>';
        $editar = $editar . " | "; 
        $editar = $editar . '<a href="borrar.php?id=';
        $editar = $editar . $vehicule["id"];
        $editar = $editar . '">Borrar</a> </td>';
        echo $editar;
        echo "</tr>";
      }
    ?>
  </table>

  <a href="form.html" class="btn">Insertar</a>
</body>
</html>
