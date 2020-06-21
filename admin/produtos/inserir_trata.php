<?php
require('../../include/config.inc.php');
require('../../include/db.inc.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

if ($_FILES['foto']['name'] != '') {
  $foto = $_FILES['foto'];
  $nome_imagem = $foto['name'];
  $ficheiro = $dir_site . '/img/' . $nome_imagem;

  copy($foto['tmp_name'], $ficheiro);
} else {
  $comando = 'select foto from produtos where id=' . $id . ';';
  $resultado = my_query($comando);
  $nome_imagem = $resultado[0]['foto'];
}
$command = 'insert into produtos (nome, descricao, preco, foto) VALUES 
  ("' . $nome . '", "' . $descricao . '", ' . $preco . ', "' . $nome_imagem . '");';

my_query($command);

header("Refresh:0; url=./index.php");
