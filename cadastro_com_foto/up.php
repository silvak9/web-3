<?php
require_once "Cadastro.class.php";
//Vetor com os tipos de erros de upload do php
$_ERRO[0] = "Não houve erro";
$_ERRO[1] = "O arquivo no upload é maior do que o limite do PHP";
$_ERRO[2] = "O arquivo ultrapassa o limite de tamanho especificado no HTML";
$_ERRO [3] = "O upload do arquivo foi feito parcialmente";
$_ERRO [4] = "Não foi feito o upload do arquivo";
if($_FILES['foto']['error']!= 0){
    die("Não foi possivel fazer o upload. Erro: <b>" . $_ERRO[$_FILES['foto']['error']]."</b>");
}
$nome = $_POST['nome'];
$cadastro = new Cadastro(0, $nome, "");

$extensoes = array('jpg','png', 'gif');
// explode separa uma string em pedaços apartir do ponto 
$pedacos = explode('.', $_FILES['foto']['name']);
// strtolower transformar os pedaços da string acima em minuscula e end pega o ultimo parte vetor 
$extensao = strtolower(end($pedacos));
// array_search ele vai pra proxima posiçao do vetor
if(array_search($extensao, $extensoes)===false){
    echo "Por favor, envie arquivos com as seguintes extensões: " ;
    for($i = 0; $i<count($pedacos);$i++){
        echo $extensoes[$i];
    }
    die();
}
try{
    $cad = $cadastro->salvar();
    var_dump($cad);
}catch(Exception $e){   
    echo $e->getMessage();  
}
$uploadfile = "./images/" . $cad->codigo . basename($_FILES['foto']['name']);
if(move_uploaded_file($_FILES['foto']['tmp_name'],$uploadfile)){
    try{
        $cadastro->update( "./images/" .$cad . basename($_FILES['foto']['name']), $cad);
        echo 'cadastrado com sucesso.';
    }catch(Exception $e){
        echo $e->getMessage();
    }
}else{
    echo 'Não foi possivel enviar o arquivo. O cadastro não foi efetuado.';
    try{
        $cadastro->delete($cad->codigo);
        echo 'deletado com sucesso';
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>

<!doctype html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>Fotos</title>
        </head>
        <body>
            <h2>
                Exibindo fotos.
            </h2>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Foto</th>
                </tr>
                <?php
                    $cadastro = new Cadastro();
                    $dados = $cadastro->getAll();
                ?>
                <tr>
                    <?php
                        foreach ($dados as $dado) {
                    ?>
                    <tr>
                        <td>
                            <=?$dado->nome;?>
                            <figure src="./images/<?=$dado->foto;?>" width="400" alt="Foto de <?=$dado->nome;?>"></figure>
                            <?php  } ?>
                        </td>
                    </tr>
                </tr>
            </table>
        </body>
    </html>