<?php
require_once '../../conexao/conexao_PDO.php';
class Info_SalaDAO{

/** Salva um novo objeto na tabela info_sala
 * Retorna a confirmação se a ação foi executada 
 * @param Object $objeto 
 * @return Boolean
 */
public function salvar( $objeto) {
try{
	$conexao = new con();
	$pdo = $conexao->conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO info_sala (identificacao,departamento,localizacao,ponto_de_referencia,responsavel,descricao,telefone,horario_funcionamento) VALUES(?,?,?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(1, $objeto->getIdentificacao(), PDO::PARAM_STR);
	$stmt->bindValue(2, $objeto->getDepartamento(), PDO::PARAM_STR);
	$stmt->bindValue(3, $objeto->getLocalizacao(), PDO::PARAM_STR);
	$stmt->bindValue(4, $objeto->getPonto_de_Referencia(), PDO::PARAM_STR);
	$stmt->bindValue(5, $objeto->getResponsavel(), PDO::PARAM_STR);
	$stmt->bindValue(6, $objeto->getDescricao(), PDO::PARAM_STR);
	$stmt->bindValue(7, $objeto->getTelefone(), PDO::PARAM_STR);
	$stmt->bindValue(8, $objeto->getHorario_Funcionamento(), PDO::PARAM_STR);

	$stmt->execute();
	return true;
  } catch(PDOException $e) {
	echo 'Error: ' . $e->getMessage();
	}
}

/** Atualiza um campo de um registro na tabela Imagens
* Retorna a confirmação se a ação foi executada 
* @param String $campo
* @param String $valor
* @param String $identificacao
* @return Boolean
*/
public function atualizar(  $identificacao,$campo,$valor) {
try{
	$conexao = new con();
	$pdo = $conexao->conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = 'UPDATE info_sala SET '.$campo.' = :campo WHERE identificacao = :identificacao';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
	  ':campo'   => $valor,
	  ':identificacao' => $identificacao
	));
	   
	return true;
  } catch(PDOException $e) {
	echo 'Error: ' . $e->getMessage();
  }
}
/** Deleta um objeto (um registro) do banco
* Retorna a confirmação se a ação foi executada 
* @param String $identificacao_Sala
* @return Boolean
* Não tá funcionando com a verificação se a tabela estiver vazia
*/
public function excluir( $identificacao_Sala) {
	try {	 
		$retorno = true;
		$conexao = new con();
		$pdo = $conexao->conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//			if($this->retornaTamanho() > 0){
				$stmt = $pdo->prepare('DELETE FROM info_sala WHERE identificacao = :identificacao_Sala');
				$stmt->bindValue(':identificacao_Sala', $identificacao_Sala,PDO::PARAM_STR); 
				$stmt->execute();
			
//		    else{
//				$retorno = false;
//			}
		   
		return $retorno;
	  } catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	  }
}
/** Busca um registro na tabela a partir de sua identificação(Código de cada sala)
* Retorna um array associativo sendo os campos do registro as chaves(Ex.: identificacao => 'C201')   
* @param String $identificacao_Sala
* @return Array associativo no qual a chave será os campos da linha retornada da consulta SQL 
*/
public function buscar( $identificacao_Sala) {
try{
	echo $identificacao_Sala;
	$conexao = new con();
	$pdo = $conexao->conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql_consulta = "select*from info_sala where identificacao = "."'".$identificacao_Sala."'";
	$consulta = $pdo->query($sql_consulta);
	//O array $resultado será preenchido com uma linha da tabela Info_Sala de acordo com a identificação da sala
	$resultado = $consulta->fetch(PDO::FETCH_OBJ);
	return $resultado;

	} catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
}
/** Busca um registro na tabela a partir de sua identificação(Código de cada sala)
* Retorna um array associativo sendo os campos do registro as chaves(Ex.: identificacao => 'C201')   
* @return Array
*/
public function retornarTabela() {
try{
	$conexao = new con();
	$pdo = $conexao->conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM info_sala";
	$consulta = $pdo->query($sql);
	$resultado = array();
	/**
	 * Cria uma matriz($resultado) na qual cada linha será preenchida pelo vetor $result
	 * $result recebe uma linha retornada pela consulta SQL
	 * Chave numerica X [linha da tabela(array associativo)]
	 */
    while ($result = $consulta->fetch(PDO::FETCH_ASSOC)){
        array_push($resultado,$result); 
	}      
	return $resultado;

} catch(PDOException $e) {
	echo 'Error: ' . $e->getMessage();
  }
}

	private function retornaTamanho(){
		try{
			$conexao = new con();
			$pdo = $conexao->conectar();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM info_sala";
			$consulta = $pdo->query($sql);
			$resultado = array();
			/**
			 * Cria uma matriz($resultado) na qual cada linha será preenchida pelo vetor $result
			 * $result recebe uma linha retornada pela consulta SQL
			 * Chave numerica X [linha da tabela(array associativo)]
			 *
			*while ($result = $consulta->fetch(PDO::FETCH_ASSOC)){
			*	array_push($resultado,$result); 
			*}      */
			return sizeof($resultado);
		
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		  } 
		
	}
	public function devolveDepartamento($departamento){
		try{
			$conexao = new con();
			$pdo = $conexao->conectar();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "select*from info_sala where departamento = "."'".$departamento."'";
			$consulta = $pdo->query($sql);
			$resultado = array();
			while ($result = $consulta->fetch(PDO::FETCH_ASSOC)){
        		array_push($resultado,$result); 
				}      
			return $resultado;
			
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		  }
	}

	public function pesquisar($termo){
		$conexao = new con();
			$pdo = $conexao->conectar();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "";
			$consulta = $pdo->query($sql);
			$objeto = null;
		return $objeto;
	}

}

?>