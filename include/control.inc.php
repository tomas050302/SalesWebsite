<?php
require('config.inc.php');
session_start();

if (!isset($_SESSION['login_valido'])) {
  header('Location: ' . $url_site . '/admin/login.php');
}
