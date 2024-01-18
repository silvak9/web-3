<?php
require_once "session.php";
$usuario = unserialize($_SESSION['usuario']);
$nome = $usuario->getNome();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Menu Principal</title>
    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-4"><?=$nome;?></span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="principal.php" class="nav-link">Home</a></li>
                    <?php
                        // link visivel apenas para usuarios nivel 1(admininstradores)
                        if($usuario->getNivel()==1)
                            echo '<li class"nav-link"> <a href="principal.php?pg='.base64_encode("verTodos").'"title="Ver Usuários Cadastrados" class="nav-link">Usuários</a></li>'
                    ?>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
            </header>
            <?php
                //Se existir o parametro PG, recebemos a pagina que sera incluida
                if(isset($_GET['pg'])){
                    include base64_decode($_GET['pg']) . ".inc.php";
                }
                //Se existir o parametro C, recebemos um comando a ser executado
                if(isset($_GET['c'])){
                    if(base64_decode($_GET['c'])=="delUser"){
                        try{
                            Usuario::delUser(base64_decode($_GET['x']));
                            echo '<div class="alert  alert-sucess" role="alert">O usuário'.base64_decode($_GET['x']) . 'foi excluído com sucesso. </div>';
                        }catch(PDOException $e){
                            echo 'div class="alert alert-danger" role="alert">Atenção :' . $e->getMessage().'</div>';
                        }
                } 
            }  
            ?>
        </div>
    </body>
</html>