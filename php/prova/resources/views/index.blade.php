<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @if (Session::has('msg'))
        <script>
            window.alert('{{Session::get("msg")}}')
        </script>
    @endif
    <p>
        <a href="/time">Times</a>
    </p>
    <p>
        <a href="/jogador">Jogadores</a>
    </p>
</body>
</html>