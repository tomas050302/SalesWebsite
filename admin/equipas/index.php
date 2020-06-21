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
  <title>Equipa</title>
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

    <a class="botao" href="inserir.php">Inserir novo membro da equipa</a>

    <table width="600">
      <tr class="legenda">
        <td>id</td>
        <td>Função</td>
        <td>Nome</td>
        <td>Foto</td>
        <td>Descrição</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      <?php
      $query = "SELECT * FROM equipa";
      $resultado = my_query($query);

      foreach ($resultado as $equipa) {
      ?>

        <tr>
          <td><?php echo $equipa['id']; ?></td>
          <td><?php echo $equipa['funcao']; ?></td>
          <td><?php echo $equipa['nome']; ?></td>
          <td><img src="../../img/<?php echo $equipa['foto']; ?>" height="128" /></td>
          <td><?php echo $equipa['descricao']; ?></td>
          <td><a class="botao_tabela" href="editar.php?id=<?php echo $equipa['id']; ?>">X</a></td>
          <td><a class="botao_tabela" href="eliminar.php?id=<?php echo $equipa['id']; ?>">X</a></td>
        </tr>

      <?php
      }
      ?>
    </table>

  </div>

</body>

</html>
