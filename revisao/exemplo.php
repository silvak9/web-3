<?php

class Conexao {
    public static function conectar(): PDO {
        try {
            return new PDO("mysql:host=localhost;dbname=escola", "root", "050318");
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}

try {
    $con = Conexao::conectar(); // Corrigido aqui
    echo "Conexão efetuada com sucesso";
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
}

?>
