<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link rel="stylesheet" href="../css/estiloLista.css">
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
        <form action="busca.php" method="post">
          <label for="nome">Nome</label>
          <input type="text" name="nome" placeholder="Digite seu nome" maxlength="50"><br>
          <label for="apelido">Apelido</label>
          <input type="text" name="apelido" placeholder="Digite seu apelido" maxlength="45">
          <input type="submit" value="BUSCAR">

      </div>

      <div id="areaExibicao">
        <p>LISTA DE CONTATOS: <br> </p>
        <table border="1">
          <tr>
            <td> <b>Nome</b> </td> <td><b> Apelido </b></td>
          </tr>

          <?php
            if (isset($_SESSION['id'])) {

                $nomeArray = $_SESSION['nome'];
                $apelidoArray = $_SESSION['apelido'];
                $tam = count($nomeArray);
                for ($i=0; $i < $tam; $i++) {
                  echo "<tr>";
                  echo "<td>".$nomeArray[$i]."</td>";
                  echo "<td>".$apelidoArray[$i]."</td>";
                  echo "</tr>";
                  }

              }
            ?>
        </table>
      <div>
    </section>
  </body>
</html>
