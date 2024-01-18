<?php
require_once "Conexao.class.php";

    Class Cadastro{
        public int $codigo;
        public String $nome;
        public String $foto;

        public function __construct(int $codigo = 0, String $nome = "", String $foto = ""){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->foto = $foto;
        }

        public function getAll():?array{
            $sql = "select * from contatos";
            try{
                $con = Conexao::conectar();
                $pst = $con->prepare($sql);
                $pst->execute();
                $dados = $pst->fetch(PDO::FETCH_OBJ);
                $resultado = array();
                if($pst->rowCount() > 0){
                    foreach($dados as $dado){
                        $cadastro = new Cadastro($dado->codigo, $dado->nome, $dado->foto);
                        array_push($resultado, $cadastro);
                    }
                    return $resultado;
                }else{
                    return null;
                }
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }

        public function salvar():int{
            $sql = "insert into contatos (nome) values (?)";
            try{
                $con = Conexao::conectar();
                $pst = $con->prepare($sql);
                $pst->bindValue(1, $this->nome);
                $pst->execute();
                return $con->lastInsertId();
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }

        public function update(String $foto, int $codigo):void{
            $sql = "update contatos set foto=? where codigo=?";
            try{
                $con = Conexao::conectar();
                $pst = $con->prepare($sql);
                $pst->bindValue(1, $foto);
                $pst->bindValue(2, $codigo);
                $pst->execute();
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }

        public function delete(int $codigo){
            $sql = "delete from contatos where codigo=?";
            try{
                $con = Conexao::conectar();
                $pst = $con->prepare($sql); 
                $pst->bindValue(1, $codigo);
                $pst->execute();
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }

    }   

?>