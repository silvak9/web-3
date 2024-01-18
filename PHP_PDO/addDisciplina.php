<?php
require_once "Disciplina.class.php";
$nome = $_POST['disciplina'];

$d = new Disciplina();
try{
    $d->inserir($nome);
    echo "<p>Disciplina $nome cadastrada como sucesso</p>";
}catch(PDOException $p){
    echo "<p><strong>Atenção: ".$p->getMessage()."</strong></p>";
}
?>