<?php
require_once "Endereco.class.php";

    $cep = $_POST['cep'];
    $lagradouro = $_POST['lagradouro'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $endereco = new Endereco($cep,$lagradouro,$bairro,$cidade,$estado);
    try{
        $endereco->inserir();
        echo "Cadastrado com sucesso";
    }catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }

?>