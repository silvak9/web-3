<?php
require_once "autoload.php";
    class Livros{
        public int $codigo;
        public string $autor;
        public string $titulo;
        public string $genero;

        public function __construct( int $codigo = 0, string $autor = "", string $titulo = "", string $genero = ""){
            $this->codigo = $codigo;    
            $this->autor = $autor;
            $this->titulo = $titulo;
            $this->genero = $genero;
        }

        public static function getAll($page = 1, $regPag = 10):?array{
            try{
                $con = Conexao::conectar();
                $inicio = ($page-1)*$regPag;
                $sql = "select * from livros order by autor limit $inicio, $regPag";
                $pst = $con->prepare($sql);
                $dados = array();
                $pst->execute();
                $res = $pst->fetchAll(PDO::FETCH_OBJ);
                if($pst->rowCount() > 0){
                    foreach($res as $dado){
                        $livro = new Livros($dado->codigo, $dado->autor, $dado->titulo, $dado->genero);
                        array_push($dados, $livro);
                    }
                    return $dados;
                }else{
                    return null;
                }
            }catch(PDOException $e){
                throw new PDOException($e->getMessage());
    }
}
    public static function getTotalLivros(){
        try{
            $con = Conexao::conectar();
            $sql = "select count(*) from livros";
            $pst = $con->prepare($sql);
            $pst->execute();
            $ln = $pst->fetch(PDO::FETCH_NUM);
            return $ln[0];
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }
}
?>