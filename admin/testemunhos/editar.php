<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_GET['id'];
$query = "SELECT * FROM testemunhos WHERE id = '$id'";
$res = my_query($query);


$autor = $res[0]['autor'];
$comentario = $res[0]['comentario'];
$foto = $res[0]['foto_autor'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Editar Testemunho</title>
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
    <form name="editar_testemunhos" method="post" action="editar_trata.php" enctype='multipart/form-data'>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      Autor: <input type="text" name="autor" value="<?php echo $autor; ?>"><br>
      Comentário: <input type="text" name="comentario" value="<?php echo $comentario; ?>"><br>
      Foto: <input type="file" name="foto" value=<?php echo $foto ?>><br>
      <input type="submit" value="Editar testemunho" name="editar">
    </form>
  </div>

</body>

</html>
