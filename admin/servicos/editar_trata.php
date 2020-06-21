<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

 $query = 'UPDATE servicos SET nome = "' . $nome . '",  descricao = "' . $descricao . '" WHERE id = ' . $id . ';';
my_query($query);

header('Location: index.php');
