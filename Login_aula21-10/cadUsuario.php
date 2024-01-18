<?php
require_once "autoload.php";
$usuario = new Usuario($_POST['nome_cad'], $_POST['email_cad'], $_POST['senha_cad']);
try{
    $usuario->salvar();
    echo "<script>window.alert('Cadastro efetuado com sucesso.');window.location.href='index.php#paralogin';</script>";
}catch(PDOException $e){
    echo "div class='erro'>" . $e->getMessage() . "</div>";
}catch(Exception $e){
    echo "<script>window.alert('" . $e->getMessage() . "'); window.location.href='index.php';</script>";
}
 ?>