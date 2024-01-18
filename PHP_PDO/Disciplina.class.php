<?php
require_once "Escola.class.php";
class Disciplina{
    private int $id;
    private String $descricao;

    public function setId(int $id):void{
        $this->id = $id;
    }
    public function getId():int{
        return $this->id;
    }

    public function setDescricao(int $descricao):void{
        $this->descricao = $descricao;
    }
    public function getDescricao():String{
        return $this->descricao;
    }

    public function inserir():void{
        try{
            $banco = new Escola();
            $con = $banco->conectar();
            $sql = "insert into disciplinas (id, descricao) values (?,?)";
            $pst = $con->prepare($sql);
            $pst->bindValue(1, null);
            $pst->bindValue(2, $this->getDescricao());
            $pst->execute();
        }catch(PDOException $p){
            throw new PDOException($p->getMessage());
        }
    }

    public static function getDisciplinas():array{
        try{
            $con = Escola::conectar();
            $sql = "select * from disciplinas";
            $con->prepare($sql);
            $con->execute();
            $dados = $pst->fetchAll(PDO::FETCH_OBJ);
            $disciplinas = array();
            foreach($dados as $dado){
                $d = new Disciplina();
                $d->setId($dado->id);
                $d->setDescricao($dado->descricao);
                array_push($disciplinas, $d);
            }
            return $disciplinas;
        }catch(PDOException $e){
            throw new Exception ("Atenção: ".$e->getMessage());
        }
    }
}
?>