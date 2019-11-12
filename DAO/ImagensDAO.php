<?php

class ImagensDAO {
/** Salva um novo objeto no banco
 * Retorna a confirmação se a ação foi executada 
 * @param Object $objeto 
 * @return Boolean
 */
	public function salvar( $objeto) {
	try{
		$conexao = new con();
		$pdo = $conexao->conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO imagens (identificacao,panoramica,frontal,lateral,dianteira,imagem360) VALUES(:identificacao,:panoramica,:frontal,:lateral,:dianteira,:imagem360)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(
		  ':identificacao' => $objeto->getIdentificacao(),
		  ':panoramica' => $objeto->getPanoramica(),
		  ':frontal' => $objeto->getFrontal(),
		  ':lateral' => $objeto->getLateral(),
		  ':dianteira' => $objeto->getDianteira(),
		  ':imagem360' => $objeto->getImagem360()
		));
		return true;
	  } 
	  catch(PDOException $e) {
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
	public function atualizar( $campo,$valor, $identificacao) {
	try{
		$conexao = new con();
		$pdo = $conexao->conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 'UPDATE imagens SET '.$campo.' = :campo WHERE identificacao = :identificacao';
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
 */
	public function excluir( $identificacao_Sala) {
		try {	 
			$conexao = new con();
			$pdo = $conexao->conectar();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $pdo->prepare('DELETE FROM imagens WHERE identificacao = :identificacao_Sala');
			$stmt->bindValue(':identificacao_Sala', $identificacao_Sala,PDO::PARAM_STR); 
			$stmt->execute();
			   
			return true;
		  } catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		  }
	}
/** Busca um registro na tabela a partir de sua identificação(Código de cada sala)
 * Retorna um array associativo sendo os campos do registro as chaves(Ex.: identificacao => 'C201')   
 * @param String $identificacao_Sala
 * @return Array
 */
	public function pesquisar( $identificacao_Sala) {
	try{
		$conexao = new con();
		$pdo = $conexao->conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_consulta = "select*from imagens where identificacao = "."'".$identificacao_Sala."'";
        $consulta = $pdo->query($sql_consulta);
		$resultado = array();
		$resultado = $consulta->fetch(PDO::FETCH_ASSOC);     
		return $resultado;

		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
/** Busca um registro na tabela a partir de sua identificação(Código de cada sala)
 * Retorna um array associativo sendo os campos do registro as chaves(Ex.: identificacao => 'C201')   
 * @return Array
 */
	public function retornartabela() {
try{
	$conexao = new con();
	$pdo = $conexao->conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM imagens";
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
}
?>