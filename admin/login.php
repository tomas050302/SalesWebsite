<?php
include '../include/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <!-- divisão dos conteúdos -->
  <div class="content">
    <form name="processo_login" method="post" action="login_validar.php">
      Username: <input type="text" name="username"><br>
      Password: <input type="text" name="password"><br>
      <input type="submit" class="submit" value="Entrar" name="entrar">
    </form>
  </div>

</body>

</html>
