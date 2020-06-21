<?php 
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$username 	= $_POST['username'];
$password 	= $_POST['password']; 

$query = "INSERT INTO utilizadores (username, password, estado) VALUES ('$username', '$password', '1')";
my_query($query);

header('Location: index.php');
?>