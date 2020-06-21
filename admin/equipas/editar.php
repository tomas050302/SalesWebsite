<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_GET['id'];
$query = "SELECT * FROM equipa WHERE id = '$id'";
$res = my_query($query);

$funcao   = $res[0]['funcao'];
$nome   = $res[0]['nome'];
$descricao   = $res[0]['descricao'];
$foto   = $res[0]['foto'];
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
    <form name="editar_equipa" method="post" action="editar_trata.php" enctype='multipart/form-data'>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      Função: <input type="text" name="funcao" value="<?php echo $funcao; ?>"><br>
      Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
      Descrição: <input type="text" name="descricao" value="<?php echo $descricao; ?>"><br>
      Foto: <input type="file" name="foto" value=<?php echo $foto ?>><br>
      <input type="submit" value="Editar equipa" name="editar">
    </form>
  </div>

</body>

</html>
