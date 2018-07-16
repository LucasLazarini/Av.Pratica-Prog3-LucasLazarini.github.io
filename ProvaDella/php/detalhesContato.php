<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link rel="stylesheet" href="../css/estiloDetalhes.css">
    <script src="../js/scriptCadastroInformacoes.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once('header.php');
      session_start();
    ?>

    <section class="corpo">
      <div id="areaBusca">
        <p>Escolha o contato: </p>
        <form name="contatoDetalhes" action="buscaDetalhes.php" method="post">
          <select class="inputs" name="selectDetalhes">
            <option value=""> SELECIONE </optin>
              <?php
                require_once('conexao.php');
                $busca = "select * from contatos";
                $resulBusca = $conn->query($busca) or die($conn->error);
                while($nomes = $resulBusca->fetch_array()) {
                  echo "<option value=".$nomes['nome'].">".$nomes['nome']."</option>";
                }
              ?>
          </select>
          <input type="submit" value="BUSCAR DETALHES">
        </form>
      </div>

      <div id="areaExibicao">
        <table border="1">
          <tr>
            <td><b>ID</b></td>
            <td><b>Nome</b></td>
            <td><b>Apelido</b></td>
            <td><b>Tipo</b></td>
            <td><b>Informação</b></td>
          </tr>

          <?php
            if (isset($_SESSION['apelido'])) {
              $idContato = $_SESSION['id'];
              $nomeContato = $_SESSION['nome'];
              $apelidoContato = $_SESSION['apelido'];
              $tipoInf = $_SESSION['tipo'];
              $valorInf = $_SESSION['valor'];
              $tamanho = count($valorInf);

              for ($i=0; $i < $tamanho; $i++) {
                echo "<tr>";
                echo "<td>".$idContato."</td>";
                echo "<td>".$nomeContato."</td>";
                echo "<td>".$apelidoContato."</td>";
                echo "<td>".$tipoInf[$i]."</td>";
                echo "<td>".$valorInf[$i]."</td>";
                echo "</tr>";
              }
            }
          ?>
        </table>
      </div>
    </section>
  </body>
</html>
