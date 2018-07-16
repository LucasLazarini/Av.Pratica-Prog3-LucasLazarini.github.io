<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="../js/scriptCadastroInformacoes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link rel="stylesheet" href="../css/estiloCadastroInformacoes.css">
    <title></title>
  </head>
  <body>
    <?php
      require_once('header.php');
    ?>

    <section class="corpo">
      <p>Escolha o contato: </p>
      <form name="form_Informacoes" action="gravar_Informacoes.php" method="post">
        <select id="selectContato"class="inputs" name="listaContato">
          <option value=""> SELECIONE </optin>
            <?php
              require_once('conexao.php');
              $busca = "select * from contatos";
              $resulBusca = $conn->query($busca) or die($conn->error);
              while($nomes = $resulBusca->fetch_array()) {
                echo "<option value=".$nomes['id_Contatos'].">".$nomes['nome']."</option>";
              }
              ?>
        </select>

        <p>Escolha a infomação: </p>
        <select class="inputs" name="tipo" onchange="exibirInput(this)" required>
          <option>SELECIONE</option>
          <option value="1">Telefone</option>
          <option value="2">E-mail</option>
          <option value="3">Endereço</option>
          <option value="4">Aniversário</option>
        </select><br><br>

        <input class="inputs" id="telefone" type="text" name="telefone" placeholder="telefone">
        <input class="inputs" id="email" type="email" name="email" placeholder="email">
        <input class="inputs" id="endereco" type="text" name="endereco" placeholder="endereco">
        <input class="inputs" id="aniversario" type="date" name="aniversario">

        <input type="submit" value="ENVIAR">
      </form>
    </section>

  </body>
</html>
