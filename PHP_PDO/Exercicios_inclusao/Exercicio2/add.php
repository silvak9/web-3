<?php
require_once "Automoveis.class.php";

if($_POST['opcao']=="Cadastrar Automovel"){
    $placa = $_POST['placa'];
    $cpf = $_POST['cpf'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano_fabricado = $_POST['ano_fabricado'];
    $ano_modelo = $_POST['ano_modelo'];
    $valor = $_POST['valor'];
    $automovel = new Automoveis($placa,$cpf,$modelo,$marca,$ano_fabricado,$ano_modelo,$valor);
    try{
        $automovel->inserir();
        echo "cadastrado com sucesso";
    }catch(Exception $e){
        echo "Erro: " . $e->getMessage();
}
}




?>