<?php
require_once "Exercicio2.class.php";

class Automoveis{
    private String $placa;
    private String $cpf;
    private String $modelo;
    private String $marca;
    private int $ano_fabricado;
    private int $ano_modelo;
    private float $valor;

    public function __construct(String $placa,String $cpf,String $modelo,String $marca,int $ano_fabricado,$ano_modelo,float $valor){
        $this->setPlaca($placa);
        $this->setCpf($cpf);
        $this->setModelo($modelo);
        $this->setMarca($marca);
        $this->setAnoFabricado($ano_fabricado);
        $this->setAnoModelo($ano_modelo);
        $this->setvalor($valor);
    }


    public function setPlaca($placa):void{
        $this->placa = $placa;
    }
    public function getPlaca():String{
        return $this->placa;
    }

    public function setCpf($cpf):void{
        $this->cpf = $cpf;
    }
    public function getCpf():String{
        return $this->cpf;
    }

    public function setModelo($modelo):void{
        $this->modelo = $modelo;
    }
    public function getModelo():String{
        return $this->modelo;
    }

    public function setMarca($marca):void{
        $this->marca = $marca;
    }
    public function getMarca():String{
        return $this->marca;
    }

    public function setAnoFabricado($ano_fabricado):void{
        $this->ano_fabricado = $ano_fabricado;
    }
    public function getAnoFabricado():int{
        return $this->ano_fabricado;
    }

    public function setAnoModelo($ano_modelo):void{
        $this->ano_modelo = $ano_modelo;
    }
    public function getAnoModelo():int{
        return $this->ano_modelo;
    }
    public function setValor($valor):void{
        $this->valor = $valor;
    }
    public function getValor():float{
        return $this->valor;
    }

    public function inserir():void{
        try{
            $banco = new Exercicio2();
            $con = $banco->conexao();
            $sql = "insert into automoveis(placa, cpf, modelo, marca, ano_fabricado, ano_modelo, valor) values(?,?,?,?,?,?,?)";
            $pst = $con->prepare($sql);
            $pst->bindValue(1, $this->getPlaca());
            $pst->bindValue(2, $this->getCpf());
            $pst->bindValue(3, $this->getModelo());
            $pst->bindValue(4, $this->getMarca());
            $pst->bindValue(5, $this->getAnoFabricado());
            $pst->bindValue(6, $this->getAnoModelo());
            $pst->bindValue(7, $this->getValor());
            $pst->execute();


            // $b = new Exercicio1();
            // $con = $b->conexao();
            // $sql = "insert into enderecos (cep, lagradouro, bairro, cidade, estado) values (?,?,?,?,?)";
            // $pst = $con->prepare($sql);
            // $pst->bindParam(1, $this->getCep());
            // $pst->bindParam(2, $this->getLagradouro());
            // $pst->bindParam(3, $this->getBairro());
            // $pst->bindParam(4, $this->getCidade());
            // $pst->bindParam(5, $this->getEstado());
            // $pst->execute();
        }catch(PDOException $e){
            throw new PDOException("Erro: " . $e->getMessage());
        }
    }
}

?>