<?php
class Usuario{
    private string $nome;
    private string $email;
    private string $senha;
    private int $nivel;

    public function __construct(string $nome ="", string $email="", string $senha="", int $nivel = 0){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNivel($nivel);
    }

    public function setNivel($nivel): void{
        $this->nivel = $nivel;
    }

    public function getNivel():int{
        return $this->nivel;
    }

    public function setNome($nome): void{
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }
    public function setEmail($email): void{
        $this->email = $email;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setSenha($senha): void{
        $this->senha = $senha;
    }

    public function getSenha():string{
        return $this->senha;
    }

    public function salvar():void{
        if($this->liberado()){
            try{
                $con = Conexao::conectar();
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
            }
        $sql = "insert into usuarios (nome,email,senha, nivel) values (?,?,md5(?),?)";
        try{
            $pst = $con->prepare($sql);
            $pst->bindValue(1, $this->getNome());
            $pst->bindValue(2, $this->getEmail());
            $pst->bindValue(3, $this->getSenha());
            $pst->bindValue(4, $this->getNivel());
            $pst->execute();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }else{
        throw new Exception("O email informado já foi cadastrado.");
    }   
    }

    public function liberado():bool{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
        }
        $sql = "select count(*) from usuarios where email=?";
        try{
            $pst = $con->prepare($sql);
            $pst->bindValue(1, $this->getEmail());
            $pst->execute();
            $dado = $pst->fetch(PDO::FETCH_NUM);
            return $dado[0] == 0;
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro ao acessar a base de dados. <br>Verifique: <i> " . $e->getMessage());
        }
    }

    public static function confere(string $email, string $senha):?Usuario{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
        $sql = "select * from usuarios where email=? and senha=md5(?)";
        try{
            $pst = $con->prepare($sql);
            $pst->bindValue(1, $email);
            $pst->bindValue(2, $senha);
            $pst->execute();
            $dado = $pst->fetch(PDO::FETCH_OBJ);
            if($pst->rowCount()>0){
                $usuario = new Usuario($dado->nome, $dado->email, $senha, $dado->nivel);
                return $usuario;
            }else{
                return null;
            }
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro ao acessar a base de dados. <br>Verifique: <i> " . $e->getMessage());
        }
    }

    public static function livreAcesso(string $email):?Usuario{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
        $sql = "select * from usuarios where email=?";
        try{
            $pst = $con->prepare($sql);
            $pst->bindParam(1, $email);
            $pst->execute();
            $dado = $pst->fetch(PDO::FETCH_OBJ);
            if($dado->rowCount()>0){
                $usuario = new Usuario($dado->nome, $dado->email,"", $dado->nivel);
                return $usuario;
            }else{
                return null;
            }
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
    }

    public static function getAll():?array{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
        $sql = "select * from usuarios order by nome";
        try{
            $pst = $con->prepare($sql);
            $pst->execute();
            $dados = $pst->fetchAll(PDO::FETCH_OBJ);
            $usuarios = array();
            // pertence ao prepareStatement
            if($pst->rowCount()>0){
                foreach($dados as $dado){
                    $usuario = new Usuario($dado->nome, $dado->email,"", $dado->nivel); 
                    array_push($usuarios, $usuario);
                }
                return $usuarios;
            }else{
                return null;
            }
        }catch(PDOException $e){
            throw new Exception ("Atenção: ".$e->getMessage());
        }
    }

    public static function delUser($email):void{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
        $sql = "delete from usuarios where email=?";
        try{
            $pst = $con->prepare($sql);
            $pst->bindParam(1, $email);
            $pst->execute();
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
    }

    public static function pegaUser(string $email):?Usuario{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
        $sql = "select * from usuarios where email=?";
        try{
            $pst = $con->prepare($sql);
            $pst->bindParam(1 ,$email);
            $pst->execute();
            $dado = $pst->fetch(PDO::FETCH_OBJ);
            if($pst->rowCount()>0){
                $usuario = new Usuario($dado->nome, $dado->email, "", $dado->nivel);
                return $usuario;
            }else{
                return null;
            }
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
    }

    public static function atualizar(string $nome, string $email, int $nivel, string $senha =""):void{
        try{
            $con = Conexao::conectar();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
        try{
            if($senha==""){
                $sql = "update usuarios set nome=:nome, nivel=:nivel where email=:email";
            }else{
                $sql = "update usuarios set nome=:nome, nivel=:nivel, senha=md5(:senha), where email=:email";
            }
            $pst = $con->prepare($sql);
            $pst->bindParam(':nome', $nome );
            $pst->bindParam(':nivel', $nivel );
            $pst->bindParam(':nivel', $email );
            if($senha!="")
                $pst->bindParam(':senha',$senha);
            $pst->execute();
        }catch(PDOException $e){
            throw new PDOException("Ocorreu um erro na conexão com o banco de dados <br>Verifique: <i>". $e->getMessage()."</i>");
        }
    }

    }
?>