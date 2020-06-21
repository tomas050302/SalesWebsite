<?php include '../../include/control.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
  <title>Serviços</title>
</head>

<body>
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>
  <div class="content">
    <form action="inserir_trata.php" method="post" enctype="multipart/form-data">
      <label for="nome">Nome</label>
      <input type="text" name="nome"></input><br>
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao"></input><br>
      <input type="submit" value="adicionar"></input>
    </form>
  </div>

</body>

</html>
