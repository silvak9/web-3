<?php

class Escola{
    public static function conectar():PDO{
        try{
            return new PDO("mysql:host=localhost;dbname=escola", "root","12345678");

        }catch(PDOException $p){
            throw new PDOException($p->getMessage());
        }
    }
}
?>

