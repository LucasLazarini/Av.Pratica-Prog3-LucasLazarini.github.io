<?php
  require_once('conexao.php');

  $idContato = $_POST["listaContato"];
  $tipoCOD = $_POST["tipo"];
  $tipo;
  $valor;

  if($tipoCOD == 1){
    $tipo = "telefone";
    $valor = $_POST["telefone"];
  }else if($tipoCOD == 2){
    $tipo = "email";
    $valor = $_POST["email"];
  }else if($tipoCOD == 3){
    $tipo = "endereco";
    $valor = $_POST["endereco"];
  }else if($tipoCOD == 4){
    $tipo = "aniversario";
    $valor = $_POST["aniversario"];
  }

  $stmt = $conn->prepare("INSERT INTO informacoes (tipo, valor, id_Contatos) VALUES (?,?,?)");
  $stmt->bind_param("sss", $tipo, $valor, $idContato);
  if($stmt->execute()){
    header("Location: listaContatos.php");
  }else{
    header("Location: cadastro_Informacoes.php");
  }

?>
