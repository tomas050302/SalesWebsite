<?php 
include '../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$username 	= $_POST['username'];
$password 	= $_POST['password'];

$query = "SELECT * FROM utilizadores WHERE username = '$username' AND password = '$password' AND estado = 1";
$res = my_query($query);
if(count($res) > 0) {
	session_start();
	$_SESSION['login_valido'] = 1;
	header('Location: ' . $url_site . '/admin/index.php');
	exit();
}

header('Location: ' . $url_site . '/admin/login.php');
