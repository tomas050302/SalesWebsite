<?php include '../../include/control.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Testemunho</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
</head>

<body>
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>
  <div class="content">
    <form action="inserir_trata.php" method="post" enctype="multipart/form-data">
      <label for="autor">Autor</label>
      <input type="text" name="autor"></input><br>
      <label for="comentario">Descrição</label>
      <input type="text" name="comentario"></input><br>
      <label for="auto_foto">Foto</label>
      <input type="file" name="autor_foto"></input><br>

      <input type="submit" value="adicionar"></input>
    </form>
  </div>

</body>

</html>
