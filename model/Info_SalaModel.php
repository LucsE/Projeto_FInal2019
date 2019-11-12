<?php
class Info_SalaModel {

	private  $Identificacao;

	private  $Departamento;

	private  $Localizacao;

	private  $Ponto_de_Referencia;

	private  $Responsavel;

	private  $Descricao;

	private  $Telefone;

	private  $Horario_Funcionamento;

	public function getIdentificacao() {
		return $this->Identificacao;
	}

	public function setIdentificacao($Identificacao) {
		$this->Identificacao = $Identificacao;
	}

	public function getDepartamento() {
		return $this->Departamento;
	}

	public function setDepartamento($Departamento) {
		$this->Departamento = $Departamento;
	}

	public function getLocalizacao() {
		return $this->Localizacao;
	}

	public function setLocalizacao($Localizacao) {
		$this->Localizacao = $Localizacao;
	}

	public function getPonto_de_Referencia() {
		return $this->Ponto_de_Referencia;
	}

	public function setPonto_de_Referencia($Ponto_de_Referencia) {
		$this->Ponto_de_Referencia = $Ponto_de_Referencia;
	}

	public function getResponsavel() {
		return $this->Responsavel;
	}

	public function setResponsavel($Responsavel) {
		$this->Responsavel = $Responsavel;
	}

	public function getDescricao() {
		return $this->Descricao;
	}

	public function setDescricao($Descricao) {
		$this->Descricao = $Descricao;
	}

	public function getTelefone() {
		return $this->Telefone;
	}

	public function setTelefone($Telefone) {
		$this->Telefone = $Telefone;
	}

	public function getHorario_Funcionamento() {
		return $this->Horario_Funcionamento;
	}

	public function setHorario_Funcionamento($Horario_Funcionamento) {
		$this->Horario_Funcionamento = $Horario_Funcionamento;
	}
}
?>