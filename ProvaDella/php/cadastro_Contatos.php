<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link rel="stylesheet" href="../css/estiloContato.css">
    <title></title>
  </head>
  <body>
    <?php
      require_once('header.php');
    ?>
    <section class="corpo">
      <form class="inputs" name="form_Cadastro" action="gravarContato.php" method="post">
        <input name="nome" placeholder="Informe o seu nome: " maxlength="50" id="nome" required><br>
        <input name="apelidoContato" placeholder="Informe o seu apelido: " maxlength="45" id="apelido"><br>
        <input type="submit" value="ENVIAR" class="botao">
      </form>
    </section>
  </body>
</html>
