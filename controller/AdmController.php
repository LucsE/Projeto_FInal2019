<?php
require_once('../../DAO/Info_SalaDAO.php');

class AdmController{
    public function salvar( $objeto) {
		$dao = new Info_SalaDAO();
            if($salaobj = $dao->salvar($objeto)){
                $retorno = 'Salvo com sucesso';
            }
            else{
                $retorno = 'Não foi possível salvar!';
            }
            return $retorno;
	}

	public function atualizar(  $identificacao,$campo,$valor) {
            $dao = new Info_SalaDAO();
            if($salaobj = $dao->atualizar($identificacao,$campo,$valor)){
                $retorno = 'Atualizado com sucesso';
            }
            else{
                $retorno = 'Não foi possível atualizar!';
            }
            return $retorno;
        
    }
    public function excluir( $identificacao) {
        $dao = new Info_SalaDAO();
            if($salaobj = $dao->excluir($identificacao)){
                $retorno = 'Excluído com sucesso';
            }
            else{
                $retorno = 'Não foi possível excluir! Verifique se a identificação foi digitada corretamente.';
            }
            return $retorno;
	}
}

$adm = new AdmController();
/*
*Salvar
*/   
if($verifica == 'atualizar'){
    $identificacao = $_POST['identificacao'];
    $campo = $_POST['campo'];
    $valor = $_POST['valor'];

    $adm->atualizar($identificacao,$campo,$valor);
}

?>
