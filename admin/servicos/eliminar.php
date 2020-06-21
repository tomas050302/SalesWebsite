<?php 
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_GET['id']; 

$query = "DELETE FROM servicos WHERE id = '$id'";
my_query($query);

header('Location: index.php');
?>
