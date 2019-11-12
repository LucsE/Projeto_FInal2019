<?php

require_once('../../DAO/Info_SalaDAO.php');

class SalasController {

	public function PrepararDepartamento( $departamento) {
		$dao = new Info_SalaDAO();
		$salaobj = $dao->devolveDepartamento($departamento); 
		return $salaobj;
	}
	public function PrepararSala( $identificacao) {
		$dao = new Info_SalaDAO();
		//$model = new Info_SalaModel();
		$salaobj = $dao->buscar($identificacao); 
		return $salaobj;
	}

	public function ExibirDetalhe( $detalhe) {
		return null;
	}

	public function ExibirImagem( $imagem) {
		return null;
	}

	public function Pesquisar( $palavra) {
		$dao = new Info_SalaDAO();
		$sala = $dao->pesquisar($departamento); 
		return $sala;
	}

	public function CarregarProjecoes() {

	}

	public function TrazerInformacoesDep() {
		return null;
	}

	public function TrazerImagensDep() {
		return null;
	}

}


?>