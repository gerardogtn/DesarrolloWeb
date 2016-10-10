<!doctype html>
<html>

<head>
  <title>A new vehicule was inserted!</title>
</head>

<body>
  <?php
    include_once('config.php');
    $tag = $_REQUEST["tag"];
    $placas = $_REQUEST["placas"];
    $puntoEntrada = $_REQUEST["punto_entrada"];

    if (empty($tag) || empty($placas) || empty($puntoEntrada)) {
      print "<h1>Ningun campo puede estar vacio</h1>";
      
      if (empty($tag)) {
        print "<p>El campo tag no puede estar vacio</p>";
      }
      
      if (empty($placas)) {
        print "<p>El campo placas no puede estar vacio</p>";
      }

      if (empty($puntoEntrada)) {
        print "<p>El campo punto de entrada no puede estar vacio</p>";
      }

      print '<a href="javascript:self.history.back()"> Regresar </a>';
    } else {

      $result = mysqli_query($mysql, "INSERT INTO Vehiculo(tag, placas, punto_entrada) VALUES('$tag', '$placas', '$puntoEntrada');"); 
      print "<h1> Registro insertado con exito";

    
    }
  ?>

</body>

</html>
