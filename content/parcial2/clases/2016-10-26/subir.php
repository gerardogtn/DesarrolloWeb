<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Image uploaded!</title>
  </head>
  <body>
    <?php
      // OBTENER DATOS
      $titulo = $_REQUEST['titulo'];
      $texto = $_REQUEST['comentario'];
      $categoria = $_REQUEST['categoria'];

      $errores = "<ul>";
      // Validacion
      if (trim($titulo) == "") {
        $errores = $errores . "<li>Se requiere el titulo del comentario</li>";
      }

      if (trim($texto) - "") {
        $errores = $errores . "<li>Se requiere el comentario</li>";
      }
      $errores = $errores . "</ul>";

      $nombreArchivoTemporal = 'tmp_name'; // Nombre del archivo temporal que se guardara en /tmp
      $isFileUploaded = false; // Por default no se subio el archivo, para manjear errores.
      $tempFile = $_FILES['imagen']['tmp_name'];
      if (is_uploaded_file($tempFile)) {
        $nombreDirectorio = "imagenes/"; // Usar ruta relativa.
        $idUnico = time(); // Usamos el timestamp como un id unico.
        $nombreArchivo = $idUnico . "-" . $_FILES['imagen']['name']; // Nombre del archivo cuando se subio.
        $isFileUploaded = true;
      }

      if ($errores != "<ul></ul>") {
        echo "No se pudo realizar la insercion por los siguientes motivos";
        echo $errores;
        exit();
      }

      $pathArchivo = $nombreDirectorio . $nombreArchivo;
      if (!$isFileUploaded) {
        echo "No se pudo subir el archivo";
        exit();
      } else {
        move_uploaded_file($tempFile, $pathArchivo);
      }

      echo "Se subio el archivo correctamente!";
      echo "<ul> \n";
      echo "<li>Titulo: $tqitulo</li>\n";
      echo "<li>Texto: $texto</li>\n";
      echo "<li>Categoria: $categoria</li>\n";
      echo '<li>Imagen: <a target="_blank" href="' . $pathArchivo . '">' . $nombreArchivo . "</a></li>\n";
      echo "<br />\n";

      echo '<img src="' . $pathArchivo . '"></img>'
    ?>
  </body>
</html>
