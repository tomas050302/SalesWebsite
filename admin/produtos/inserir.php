<?php include '../../include/control.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
  <title>Produtos</title>
</head>

<body>
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>
  <div class="content">
    <form action="inserir_trata.php" method="post" enctype="multipart/form-data">
      <label for="name">Nome</label>
      <input type="text" name="nome"></input><br>
      <label for="description">Descrição</label>
      <input type="text" name="descricao"></input><br>
      <label for="preco">Preço</label>
      <input type="number" name="preco"></input><br>
      <label for="foto">Foto</label>
      <input type="file" name="foto"></input><br>

      <input type="submit" value="adicionar"></input>
    </form>
  </div>

</body>

</html>
