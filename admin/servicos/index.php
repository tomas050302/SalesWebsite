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
  <title>Registo de Serviços</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/paginas.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>

<body>

  <!-- divisão do menu -->
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>

  <!-- divisão dos conteúdos -->
  <div class="content">

    <a class="botao" href="inserir.php">Inserir novo produto</a>

    <table border="1" width="600">
      <tr class="legenda">
        <td>id</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      <?php
      $query = "SELECT * FROM servicos";
      $resultado = my_query($query);

      foreach ($resultado as $servicos) {
      ?>

        <tr>
          <td><?php echo $servicos['id']; ?></td>
          <td><?php echo $servicos['nome']; ?></td>
          <td><?php echo $servicos['descricao']; ?></td>
          <td><a class="botao_tabela" href="editar.php?id=<?php echo $servicos['id']; ?>">X</a></td>
          <td><a class="botao_tabela" href="eliminar.php?id=<?php echo $servicos['id']; ?>">X</a></td>
        </tr>

      <?php
      }
      ?>
    </table>

  </div>

</body>

</html>
