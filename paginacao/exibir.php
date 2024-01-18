<?php
    require_once "autoload.php";
    if(!isset($_REQUEST['page']))
        $page = 1;
    else
        $page = $_REQUEST['page'];
    $porPagina = 10;
    $dados = Livros::getAll($page, $porPagina);
?>  
<!doctype html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>
                Cadastro de Livros
            </title>
        </head>
        <body>
            <div class="container">
                <h1>Cadastro de livros</h1>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Gênero</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($dados as $linha){
                    ?>
                    <tr>
                        <th scope="row">
                            <?=$linha->codigo;?>
                        </th>
                        <td>
                            <?=$linha->autor;?>
                        </td>
                        <td><?=$linha->titulo;?></td>
                        <td><?=$linha->genero;?></td>
                    </tr>
                    <?php
                        }   
                    ?>
                </tbody>
            </table>
            <nav class="nav nav-pills justify-content-center">
            <?php
                $total_livros = Livros::getTotalLivros();
                $paginas = ceil($total_livros/$porPagina);   
                if($page>1){
                    $ant = $page-1;
                    echo "<a class='nav-link' href='?page=$ant' title='Ir para página $ant'>Anterior</a>";
                }
                for($i= 1;$i<=$paginas;$i++){
                    if($i == $page){
                        echo "<a class='nav-link active'>$i</a> ";
                    }else{
                        echo "<a class='nav-link' href='?page=$i' title='Ir para página $i'>$i</a>";
                    }
                }
                if($page<$paginas){
                    $prox = $page+1;
                    echo "<a class='nav-link' href='?page=$prox' title='Ir para página $prox' > Próxima</a>"; 
                }
            ?>
            </nav>
            </div>
        </body>
    </html>