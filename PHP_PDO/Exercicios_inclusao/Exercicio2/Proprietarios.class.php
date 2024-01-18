<?php
require_once "Exercicio2.class.php";

class Proprietarios{
    private String $cpf;
    private String $nome;
    private String $email; 
    private String $telefone;
    private String $sexo;

    public function __construct(String $cpf, String $nome, String $email, String $telefone, String $sexo){
        $this->setCpf($cpf);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setSexo($sexo);
    }

    public function setCpf(String $cpf):void{
        $this->cpf = $cpf;
    }

    public function getCpf():String{
        return $this->cpf;
    }

    public function setNome(String $nome):void{
        $this->nome = $nome;
    }

    public function getNome():String{
        return $this->nome;
    }
    public function setEmail(String $email):void{
        $this->email = $email;
    }

    public function getEmail():String{
        return $this->email;
    }

    public function setTelefone(String $telefone):void{
        $this->telefone = $telefone;
    }

    public function getTelefone():String{
        return $this->telefone;
    }
    public function setSexo(String $sexo):void{
        $this->sexo = $sexo;
    }

    public function getSexo():String{
        return $this->sexo;
    }

    public function inserir():void{
        try{
            $banco = new Exercicio2();
            $pst = $banco.conectar();
            $sql = "insert into proprietarios(cpf, nome, email, telefone, sexo) values(?,?,?,?,?)";
            $pst->prepare($sql);
            $pst->bindParam(1, $this->getCpf());
            $pst->bindParam(2, $this->getNome());
            $pst->bindParam(3, $this->getEmail());
            $pst->bindParam(4, $this->getTelefone());
            $pst->bindParam(5, $this->getSexo());
            $pst->execute();
        }catch(PDOException $e){
            throw new PDOException("Erro: " . $e->getMessage());
        }
    }
    
}

?>