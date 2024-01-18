<?php
session_start();
$dsn = 'mysql:host=localhost;';
$username = $_POST['usuario'];
$pasword = $_POST['senha'];
$option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

try{
    $conexao = new PDO($dsn,$username,$pasword, $option);
    $_SESSION['usuario'] = $username;
    $_SESSION['senha'] = $pasword;
    $_SESSION['erro'] = null;
    header('Location: principal.php');
}catch (PDOException $p){
    $_SESSION['erro'] = "Confira". $p->getMessage();
    header('Location: index.php');
}

?>