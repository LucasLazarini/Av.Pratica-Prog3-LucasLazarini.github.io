<?php
  session_start();
  require_once ('conexao.php');

  $nome = $_POST['nome'];
  $apelido = $_POST['apelido'];
  $i=0;
  $nomeArray = array();
  $apelidoArray= array();


  if (strlen($nome) == 0 and strlen($apelido) == 0) {
    $busca="select * from contatos";
    $result = $conn->query($busca) or die($conn->error);
    while($dados = $result->fetch_array()) {
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: listaContatos.php");
  }

  if (strlen($nome) > 0 and strlen($apelido) == 0) {
    $busca="select * from contatos where nome like '$nome%'";
    $result = $conn->query($busca) or die($conn->error);
    $_SESSION['busca'] = $result;
    while($dados = $result->fetch_array()) {
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: listaContatos.php");
  }

  if (strlen($nome) == 0 and strlen($apelido) > 0) {
    $busca="select * from contatos where apelido like '$apelido%'";
    $result = $conn->query($busca) or die($conn->error);
    while($dados = $result->fetch_array()) {
    $nomeArray[$i] = $dados['nome'];
    $apelidoArray[$i] = $dados['apelido'];
    $i++;

    }
    $_SESSION['nome'] = $nomeArray;
    $_SESSION['apelido'] = $apelidoArray;
    header("Location: listaContatos.php");
  }

?>
