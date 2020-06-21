<?php 
include '../include/control.inc.php';
include '../include/config.inc.php';

session_destroy();
header('Location: ' . $url_site . '/admin/login.php');
?>