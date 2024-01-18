<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício 1</title>
    </head>
    <body>
        <form action="exercicio.php" method="post">
            Nome: <input type="text" name="nome" placeholder="Nome Completo"><br><br>
            Nota: <input type="number" name="nota" placeholder="Nota entre 0 e 100"><br><br>
            <button type="submit">cadastrar</button>
        </form>
        <h2>Dados do Sistema</h2>    
        <table>
            <tr>
                <td><b>Alunos Cadastrados: <?= count($_SESSION['nome']);?></b></td>
            </tr>    
            <tr>
                <td>Média da Turma:<?= $nota;?></td>
            </tr>
            <tr>
                <td>
                    <a href=""><button>Ver Todos</button></a>
                    <a href=""><button>Ver maior</button></a>
                    <a href=""><button>Zerar Sistema</button></a>
                </td>
            </tr>
        </table>
    </body>
</html>



<?php

?>