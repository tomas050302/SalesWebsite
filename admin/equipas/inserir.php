<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Adicionar Membro da Equipa</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
</head>

<body>

  <!-- divisão do menu -->
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>

  <!-- divisão dos conteúdos -->
  <div class="content">
    <form name="inserir_utilizadores" method="post" action="inserir_trata.php" enctype='multipart/form-data'>
      Função: <input type="text" name="funcao"><br>
      Nome: <input type="text" name="nome"><br>
      Descrição: <input type="text" name="descricao"><br>
      Foto: <input type="file" name="foto"><br>
      <input type="submit" value="Inserir novo membro da Equipa" name="inserir">
    </form>
  </div>

</body>

</html>
