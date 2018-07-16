<?php
  session_start();
  require_once ('conexao.php');

  $nome = $_POST['selectDetalhes'];
  $i=0;
  $i2=0;
  $id;
  $apelido;
  $arrayInf = array();
  $arrayValor = array();


  if (strlen($nome) > 0) {
    $busca="select * from contatos where nome like '$nome%'";
    $result = $conn->query($busca) or die($conn->error);
    while($dados = $result->fetch_array()) {
      $id = $dados['id_Contatos'];
      $apelido = $dados['apelido'];
      $i++;
    }
    $busca2="select * from informacoes where id_Contatos = '$id'";
    $result = $conn->query($busca2) or die($conn->error);
    while($dados = $result->fetch_array()) {
      $arrayInf[$i2] = $dados['tipo'];
      $arrayValor[$i2] = $dados['valor'];
      $i2++;
    }
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['apelido'] = $apelido;
    $_SESSION['tipo'] = $arrayInf;
    $_SESSION['valor'] = $arrayValor;
    header("Location: detalhesContato.php");
  }

?>
