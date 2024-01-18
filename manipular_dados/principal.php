<?php
session_start();
// isset verifica se ha variavel existe ou se há algo nela
if(!isset($_SESSION['usuario'])){
    echo "ola";
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="utf-8">

    </head>
    <body>
        <h1>Mysql</h1>
        <P>SQL</P>
        <form action="executar.php" method="post">
        <TExtarea></TExtarea>
        </form>
        <P>comandos suportados: create, drop, alter, insert, delete e update</P>
        <button type="submit">executar</button>
    </body>
</html>