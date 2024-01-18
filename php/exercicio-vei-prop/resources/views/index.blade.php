<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Veiculos e Proprietários</h1>
    @if (Session::has('msg'))
        <script>
            window.alert('{{(Session::get("msg"))}}')
        </script>
    @endif
    <p><a href="/veiculo">veiculo</a></p>
    <p><a href="/proprietario">proprietario</a></p>
</body>
</html>