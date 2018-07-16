<?php
  require_once('conexao.php');

  $nome = $_POST["nome"];
  $apelido = $_POST["apelidoContato"];


  $stmt = $conn->prepare("INSERT INTO contatos (nome, apelido) VALUES (?,?)");
  $stmt->bind_param("ss", $nome, $apelido);
  if($stmt->execute()){
    header("Location: cadastro_Informacoes.php");
  }else{
    header("Location: cadastro_Contatos.php");
  }

?>
