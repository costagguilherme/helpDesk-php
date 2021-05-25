<?php


session_start();

// Montagem do texto

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);


$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// Montagem do arquivo

$arquivo = fopen('../../private_help_desk/chamados.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
echo $texto;
header('Location: abrir_chamado.php');


?>