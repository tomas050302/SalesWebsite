<?php
include '../include/control.inc.php';
include '../include/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Back Office</title>
  <link rel="stylesheet" href="css/admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>

<body>
  <h1>Back Office</h1>
  <!-- divisão do menu -->
  <?php
  include $dir_site . '/include/menu.inc.php';
  ?>

  <!-- divisão dos conteúdos -->
  <div class="content">
    <span class="welcome-text">Bem-vindo ao Back Office do website.</span>
  </div>

</body>

</html>
