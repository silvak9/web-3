<?php
class Funcionario{
	public static function novo($nome,$nivel){
		try{
			$con = Aula14::conectar();
			$pst = $con->prepare("insert into funcionarios values (null,?,?)");
			$pst->bindParam(1,$nome);
			$pst->bindParam(2,$nivel);
			$pst->execute();
		}catch(PDOException $p){
			throw new PDOException($p->getMessage());
		}
	}	
	public static function getAll(){
		try{
			$con = Aula14::conectar();
			$pst = $con->prepare("select funcionarios.codigo, funcionarios.nome, nivel.nivel, nivel.salario, setor.setor from funcionarios, setor, nivel  where funcionarios.nivel=nivel.codigo and funcionarios.setor=setor.codigo and nivel.codigo_setor=setor.codigo;");
			$pst->execute();
			return $pst->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $p){
			throw new PDOException($p->getMessage());
		}	
	}
	public static function getBySetor($setor)
	{
		try {
			$con = Aula14::conectar();
			$pst = $con->prepare("SELECT funcionarios.codigo, funcionarios.nome, nivel.nivel, nivel.salario, setor.setor 
								 FROM funcionarios
								 JOIN nivel ON funcionarios.nivel_codigo = nivel.codigo
								 JOIN setor ON nivel.setor_codigo = setor.codigo
								 WHERE setor.codigo = ?");
	
			$pst->bindParam(1, $setor);
			$pst->execute();
	
			return $pst->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $p) {
			throw new PDOException($p->getMessage());
		}
	}
	
	


}
?>