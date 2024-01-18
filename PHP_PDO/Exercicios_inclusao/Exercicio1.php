<?php
class Exercicio1{

    public String $dsn = "mysql:host=localhost;dbname=exercicio_1";
    public String $user = "root";
    public String $password = "12345678";

  
    public function conexao():PDO{
        try{
            return new PDO($this->dsn, $this->user, $this->password);
        }catch(PDOException $e){
            throw new PDOexception($e->getMessage());
    }}
}
?>