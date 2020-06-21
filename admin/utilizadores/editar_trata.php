<?php 
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id 		= $_POST['id'];
$username 	= $_POST['username'];
$password 	= $_POST['password']; 
$estado		= isset($_POST['estado']) ? 1 : 0;

$query = "UPDATE utilizadores SET username = '$username', password = '$password', estado = '$estado' WHERE id = '$id'";
my_query($query);

header('Location: index.php');
?>