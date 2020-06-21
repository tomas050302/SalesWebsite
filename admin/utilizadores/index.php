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
  <title>Utilizadores</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

  <!-- divisão do menu -->
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>

  <!-- divisão dos conteúdos -->
  <div class="content">

    <a class="botao" href="inserir.php">Inserir novo utilizador</a>

    <table width="600">
      <tr class="legenda">
        <td>Username</td>
        <td>Palavra-passe</td>
        <td>Estado</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      <?php
      $query = "SELECT * FROM utilizadores";
      $resultado = my_query($query);

      foreach ($resultado as $utilizadores) {
      ?>

        <tr>
          <td><?php echo $utilizadores['username']; ?></td>
          <td><?php echo $utilizadores['password']; ?></td>
          <td><?php echo $utilizadores['estado']; ?></td>
          <td><a class="botao_tabela" href="editar.php?id=<?php echo $utilizadores['id']; ?>">X</a></td>
          <td><a class="botao_tabela" href="eliminar.php?id=<?php echo $utilizadores['id']; ?>">X</a></td>
        </tr>

      <?php
      }
      ?>
    </table>

  </div>

</body>

</html>
