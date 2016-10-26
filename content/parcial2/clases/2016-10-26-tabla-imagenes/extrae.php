<?php
  include_once('config.php');

  if(!isset($_GET['id'])) {
    echo "<h1>Please set an id</h1>"
    exit();
  }

  $id = $_GET['id'];
  $sql = "SELECT imagen FROM Images WHERE id = $id";
  $result = $conn->query($sql);

  $compressedImg = mysqli_fetch_array($result)['imagen'];

  Header("Content-type:jpeg");
  echo $compressedImg;

  $conn->close();
?>
