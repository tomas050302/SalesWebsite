<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_GET['id'];
$query = "SELECT * FROM utilizadores WHERE id = '$id'";
$res = my_query($query);

$username   = $res[0]['username'];
$password   = $res[0]['password'];
$estado   = $res[0]['estado'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Adicionar Utilizador</title>
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
    <form name="inserir_utilizadores" method="post" action="editar_trata.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      Username: <input type="text" name="username" value="<?php echo $username; ?>"><br>
      Password: <input type="text" name="password" value="<?php echo $password; ?>"><br>
      Estado: <input type="checkbox" name="estado" <?php echo ($estado ? 'checked="checked"' : '') ?>><br>
      <input type="submit" value="Editar utilizador" name="editar">
    </form>
  </div>

</body>

</html>
