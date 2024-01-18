<?php
session_start();
require_once "autoload.php";

try{
    $usuario = Usuario::confere($_POST['email_login'],$_POST['senha_login']);
    if(isset($_COOKIE['controle'])){
        $email = $_COOKIE['controle'];
        $usuario = Usuario::liverAcesso($email);
        // só para facilitar a vizualização de quando o cookie foi utilizado
        if(!is_null($usuario)){
            $usuario->setNome($usuario->getNome()." [Login Automático]");
        }
    }else{
        $email = $_POST['email_login'];
        $senha = $_POST['senha_login'];
        $usuario = Usuario::confere($email,$senha); 
    }
    if(!is_null($usuario)){
        $_SESSION['logado'] = true;
        //tenho que usar o serialize para passar este objeto de uma lado paro o outro(paginas)
        $_SESSION['usuario'] = serialize($usuario); 
        if(isset($_POST['manterlogado'])){
            setcookie("controle",$email,time()+60*60*24*10,"/");
        }
        header('Location: principal.php');

    }else{
        $_SESSION['logado']=false;
        setcookie("controle",null,-1,"/");
        echo "<script>window.alert('Usuario ou Senha, incorretos.');window.location.href='index.php#paralogin';</script>";
    }
}catch(PDOException $e){
    echo ("Ocorreu um erro ao acessar a base de dados. <br>Verifique:   <i>" . $e->getMessage());
}

?>