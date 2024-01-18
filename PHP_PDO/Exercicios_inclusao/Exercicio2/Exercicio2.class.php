<?php
class Exercicio2{
    
    // const DSN = "mysql:host=localhost;dbname=exercicio_2";
    // const USER = "root";
    // const PASSWORD = "12345678";
    // static $con;
    // public String $dsn = "mysql:host=localhost;dbname=exercicio_1.automoveis";
    public String $dsn = "mysql:host=localhost;dbname=exercicio_2";
    public String $user = "root";
    public String $password = "12345678";


    public function conexao():PDO{
        try{
            return new PDO($this->dsn, $this->user, $this->password);
            // self::$con =new PDO(self::DSN, self::USER, self::PASSWORD);
            // return self::$con;
        }catch(PDOException $e){
            throw new PDOexception($e->getMessage());
        }
    }
}