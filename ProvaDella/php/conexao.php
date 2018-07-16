<?php
  $conn = new mysqli("localhost", "user", "password", "bacoprovadella");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Erro...";
    }
?>
