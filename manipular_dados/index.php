<?php
session_start();
?>
<!doctyte html>
<html>
    <head><title>
        Conectar
    </title>
    <meta charset="utf-8">
</head>
    <body>
        <h3>Mysql
        </h3>
        <form action="login.php" method="post">
            Usuário: <input type="text" name="usuario">
            <p>Senha: <input type="password" name="senha"></p>
            <?php
        if($_SESSION['erro']!=null)
        echo "<div class='alert alert-danger'>".$_SESSION['erro']."</div>";
        ?>
            <button type="submit">logar</button>
        </form>
        
    </body>

</html>
