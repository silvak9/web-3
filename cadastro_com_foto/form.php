<!doctype html>
<html lang="pt-br">
    <head>
        <title>cadastro foto</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Cadastro de foto arquivo</h2>
        <form enctype="multipart/form-data" action="up.php" method="post">
            Nome: <input type="text" name="nome">
            <input type="hidden" name="MAX_FILE_SIZE" value="50000">
            Foto: <input name="foto" type="file"><br>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>