<?php
require_once " autoload.php";
?>
<!doctype html>
<html>
    <head>
        <title>Lista de disciplinas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            try{
                $disciplinas = Disciplina::getDisciplinas();
            }catch(PDOException $p){
                echo "<p>Ocorreu um erro ao recuperar as disciplinas.</p>";
            }
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
            </tr>
            <?php
                foreach($disciplinas as $disciplina){
            ?>
            <tr>
                <td><?=$disciplina->getId();?></td>
                <td><?=$disciplina->getDescricao();?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>