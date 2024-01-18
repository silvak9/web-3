<!doctype html>
<html lang="pt-br">
    <head>
        <title>Automovéis</title>
        <meta charset="utf=8">
    </head>
    <body>
        <h2>Cadastro de Automovéis</h2>
        <form action="add.php" method="post">
            <p>
                Proprietarios <input type="comboBox" name="proprietarios"> 
            </p>
            <p>
                Placa: <input type="text" name="placa">
            </p>
            <p>
                Cpf: <input type="text" name="cpf">
            </p>
            <p>
                Modelo: <input type="text" name="modelo">
            </p>
            <p>
                Marca: <input type="text" name="marca">
            </p>
            <p>
                Ano Fabricado: <input type="number" name="ano_fabricado">
            </p>
            <p>
                Ano Modelo: <input type="number" name="ano_modelo">
            </p>
            <p>
                Valor: <input type="number" name="valor">
            </p>
            <input type="hidden" name = "opcao" value="Cadastrar Automovel">
            <p>
                <button type="submit">Cadastrar</button>
            </p>
        </form>
    </form>
</html>