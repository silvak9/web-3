<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cadastro de Endereço</title>
        <meta charset="utf=8">
    </head>
    <body>
        <h2>Cadastro de Endereços</h2>
        <form action="addEndereco.php" method="post">
            <p>
                CEP: <input type="text" name="cep">
            </p>
            <p>
                lagradouro: <input type="text" name="lagradouro">
            </p>
            <p>
                Bairro: <input type="text" name="bairro">
            </p>
            <p>
                Cidade: <input type="text" name="cidade">
            </p>
            <p>
                Estado: <input type="text" name="estado">
            </p>
            <p>
                <input type="submit" value="cadastrar">
            </p>
        </form>
    </form>
</html>