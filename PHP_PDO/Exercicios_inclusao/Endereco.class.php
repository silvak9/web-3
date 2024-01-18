<?php
require_once "Exercicio1.php";
class Endereco{
    private String $cep;
    private String $lagradouro;
    private String $bairro;
    private String $cidade; 
    private String $estado;

    public function __construct(String $cep, String $lagradouro,String $bairro,String $cidade,String $estado){
        $this->setCep($cep);
        $this->setLagradouro($lagradouro);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
    }

    public function setCep($cep):void{
        $this->cep = $cep;
    }
    public function getCep():String{
        return $this->cep;
    }

    public function setLagradouro($lagradouro):void{
        $this->lagradouro = $lagradouro;
    }
    public function getLagradouro():String{
        return $this->lagradouro;
    }

    public function setBairro($bairro):void{
        $this->bairro = $bairro;
    }
    public function getBairro():String{
        return $this->bairro;
    }

    public function setCidade($cidade):void{
        $this->cidade = $cidade;
    }
    public function getCidade():String{
        return $this->cidade;
    }

    public function setEstado($estado):void{
        $this->estado = $estado;
    }
    public function getEstado():String{
        return $this->estado;
    }

    public function inserir():void{
        try{
            $b = new Exercicio1();
            $con = $b->conexao();
            $sql = "insert into enderecos (cep, lagradouro, bairro, cidade, estado) values (?,?,?,?,?)";
            $pst = $con->prepare($sql);
            $pst->bindParam(1, $this->getCep());
            $pst->bindParam(2, $this->getLagradouro());
            $pst->bindParam(3, $this->getBairro());
            $pst->bindParam(4, $this->getCidade());
            $pst->bindParam(5, $this->getEstado());
            $pst->execute();
        }catch(PDOException $e){
            throw new Exception("Erro: ".$e->getMessage());
        }
    }
}

?>