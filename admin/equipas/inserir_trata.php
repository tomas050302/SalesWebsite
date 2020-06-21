<?php
require('../../include/config.inc.php');
require('../../include/db.inc.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$funcao = $_POST['funcao'];

$foto = $_FILES['foto'];
$nome_imagem = $foto['name'];
$ficheiro = $dir_site . '/img/' . $nome_imagem;

copy($foto['tmp_name'], $ficheiro);

$command = 'insert into equipa (funcao, nome, foto, descricao) VALUES 
  ("' . $funcao . '", "' . $nome . '", "' . $nome_imagem . '", "' . $descricao . '");';

my_query($command);

header("Refresh:0; url=./index.php");
