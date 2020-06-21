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
  <title>Testemunhos</title>
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

    <a class="botao" href="inserir.php">Inserir novo Testemunho</a>

    <table border="1" width="600">
      <tr class="legenda">
        <td>id</td>
        <td>Autor</td>
        <td>Foto Autor</td>
        <td>Comentário</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      <?php
      $query = "SELECT * FROM testemunhos";
      $resultado = my_query($query);

      foreach ($resultado as $testemunhos) {
      ?>

        <tr>
          <td><?php echo $testemunhos['id']; ?></td>
          <td><?php echo $testemunhos['autor']; ?></td>
          <td><img src="../../img/<?php echo $testemunhos['foto_autor']; ?>" height="128" /></td>
          <td><?php echo $testemunhos['comentario']; ?></td>
          <td><a class="botao_tabela" href="editar.php?id=<?php echo $testemunhos['id']; ?>">X</a></td>
          <td><a class="botao_tabela" href="eliminar.php?id=<?php echo $testemunhos['id']; ?>">X</a></td>
        </tr>

      <?php
      }
      ?>
    </table>

  </div>

</body>

</html>
