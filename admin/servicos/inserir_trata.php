<?php
require('../../include/config.inc.php');
require('../../include/db.inc.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$command = 'insert into servicos (nome, descricao) VALUES 
  ("' . $nome . '", "' . $descricao . '");';

my_query($command);

header("Refresh:0; url=./index.php");
