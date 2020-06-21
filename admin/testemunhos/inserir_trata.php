<?php
require('../../include/config.inc.php');
require('../../include/db.inc.php');

$autor = $_POST['autor'];
$comentario = $_POST['comentario'];


if ($_FILES['autor_foto']['name'] != '') {

  $foto = $_FILES['autor_foto'];
  $nome_imagem = $foto['name'];
  $ficheiro = $dir_site . '/img/' . $nome_imagem;
  copy($foto['tmp_name'], $ficheiro);

} else {
  $comando = 'select foto from testemunhos where id=' . $id . ';';
  $resultado = my_query($comando);
  $nome_imagem = $resultado[0]['foto_autor'];

}
$command = 'insert into testemunhos (autor, comentario,  foto_autor) VALUES 
  ("' . $autor . '", "' . $comentario . '","' . $nome_imagem . '");';

my_query($command);

header("Refresh:0; url=./index.php");
