<?php
    class Conexao{
        public static function conectar():PDO{
            try{
                return new PDO("mysql:host=localhost;dbname=cadastro", "root", "12345678");
            }catch(PDOException $e){    
                throw new PDOException($e->getMessage());
            
        }
    }
}

?>