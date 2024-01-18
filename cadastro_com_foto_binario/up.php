<?php
require_once "Cadastro.class.php";
//Vetor com os tipos de erros de upload do php
$_ERRO[0] = "Não houve erro";
$_ERRO[1] = "O arquivo no upload é maior do que o limite do PHP";
$_ERRO[2] = "O arquivo ultrapassa o limite de tamanho especificado no HTML";
$_ERRO [3] = "O upload do arquivo foi feito parcialmente";
$_ERRO [4] = "Não foi feito o upload do arquivo";
if($_FILES['foto']['error']!= 0){
    die("Não foi possivel fazer o upload. Erro: <b>" . $_ERRO[$_FILES['foto']['error']]."</b>");
}

$conteudo = file_get_contents($_FILES['foto']['tmp_name']);


?>