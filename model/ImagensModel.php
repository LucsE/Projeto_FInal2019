<?php
class ImagensModel {

	private  $Identificacao;

	private  $Panoramica;

	private  $Frontal;

	private  $Lateral;

	private  $Dinateira;

	private  $Imagem360;

	public function getIdentificacao() {
		return $this->Identificacao;
	}

	public function setIdentificacao($Identificacao) {
		$this->Identificacao = $Identificacao;
	}

	public function getPanoramica() {
		return $this->Panoramica;
	}

	public function setPanoramica($Panoramica) {
		$this->Panoramica = $Panoramica;
	}

	public function getFrontal() {
		return $this->Frontal;
	}

	public function setFrontal($Frontal) {
		$this->Frontal = $Frontal;
	}

	public function getLateral() {
		return $this->Lateral;
	}

	public function setLateral($Lateral) {
		$this->Lateral = $Lateral;
	}

	public function getDinateira() {
		return $this->Dinateira;
	}

	public function setDinateira($Dinateira) {
		$this->Dinateira = $Dinateira;
	}

	public function getImagem360() {
		return $this->Imagem360;
	}

	public function setImagem360( $Imagem360) {
		$this->Imagem360 = $Imagem360;
	}


}
