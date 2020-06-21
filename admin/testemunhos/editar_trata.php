<?php
include '../../include/control.inc.php';
include '../../include/config.inc.php';
include $dir_site . '/include/functions.inc.php';
include $dir_site . '/include/db.inc.php';

$id = $_POST['id'];
$autor = $_POST['autor'];
$comentario = $_POST['comentario'];

if ($_FILES['foto']['name'] != '') {
  $foto = $_FILES['foto'];
  $nome_imagem = $foto['name'];
  $ficheiro = $dir_site . '/img/' . $nome_imagem;

  copy($foto['tmp_name'], $ficheiro);
} else {
  $comando = 'select foto_autor from testemunhos where id=' . $id . ';';
  $resultado = my_query($comando);
  $nome_imagem = $resultado[0]['foto'];
}

echo $query = 'UPDATE testemunhos SET autor = "' . $autor . '", comentario = "' . $comentario . '", foto_autor = "' . $nome_imagem . '" WHERE id = ' . $id . ';';
my_query($query);

header('Location: index.php');
