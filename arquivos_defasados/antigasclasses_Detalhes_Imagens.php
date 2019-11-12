<?php
class imagensModel{
	
	private $sala_identificacao;
	
	public function setSala_identificacao($valor){
        $this->$sala_identificacao = $valor;
        return null;
    }

	public function retornaImagens(){
        //establece a conexao com o banco de dados
        $conexao = new con();
        if($conexao->conectar()){
            $sql = "SELECT * FROM imagens";
            $consulta = $PDO->query($sql);
            $result = $consulta->fetchAll();
        }

        return $result;
    }
    public function consultarBD(){
        $conexao = new con();
        if($conexao->conectar()){
        $sql_consulta = "select*from imagens where sala_identificacao = ";
        $consulta = $PDO->query($sql_consulta.$this->$sala_identificacao); 
        $result = $consulta->fetchAll();
        }
        return $result;
    }
        //retorna uma coluna da tabela imagens
    public function coluna($coluna){
        $conexao = new con();
        $PDO = $conexao->conectar();
        $sql_consulta = "select ".$coluna." from imagens";
        $consulta = $PDO->query($sql_consulta);
        $r = array();
        while ($result = $consulta->fetch(PDO::FETCH_ASSOC)){
            array_push($r,$result); 
        }
        
        return $r;
    }

}

class detalhesModel{
    private $sala_identificacao; 
    public function retornaDetalhes(){
        //establece a conexao com o banco de dados
        $conexao = new con();
        if($conexao.conectar()){
            $sql_detalhes = "SELECT * FROM detalhes";
            $consulta = $PDO->query($sql_detalhes);
            $result = $consulta->fetchAll();
        }


        return $result;
    }
    public function consultarBD(){
        $conexao = new con();
        if($conexao.conectar()){
        $sql_consulta = "select*from detalhes where sala_identificacao = ";
        $consulta = $PDO->query($sql_consulta.$this->$sala_identificacao); 
        $result = $consulta->fetchAll();
        }
        return $result;
    }
}

class detalhesController{
    private $sala_identificacao; 

    public function setSala_identificacao($valor){
        $this->$sala_identificacao = $valor;
        return null;
    } 
    public function criarD(){
        $detalhe = new detalhesModel();
        $detalhe.setSala_identificacao($this->$sala_identificacao);
        $retorno = $detalhe.consultarBD();
        return $retorno;
    }
    public function getObjetivo(){
        if($detalhe = criarD()){
            $result = $detalhe;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['objetivo'];
    }
    public function getTurmas_que_assistem(){
        if($detalhe = criarD()){
            $result = $detalhe;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['turmas_que_assistem'];
    }

    public function getDepartamento(){
        if($detalhe = criarD()){
            $result = $detalhe;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['departamento'];
    }


    public function getResponsavel(){
        if($detalhe = criarD()){
            $result = $detalhe;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['responsavel'];
    }


    public function getHorario(){
        if($detalhe = criarD()){
            $result = $detalhe;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['horario'];
    }
}

class imagensController{

    private $sala_identificacao;

    public function setSala_identificacao($valor){
        $this->$sala_identificacao = $valor;
        return null;
    }

    public function criarD(){
        $img = new imagensModel();
        $img.setSala_identificacao($this->$sala_identificacao);
        $retorno = $img.consultarBD();
        return $retorno;
    }
    //Retorna uma coluna da tabela imagens a partir de um parametro
    public function pegaColuna($coluna){
        $img = new imagensModel();
        $retorno = $img->coluna($coluna);
        return $retorno;
    }
    public function getSala_identificacao(){
	
        if($img = criarD()){
            $result = $img;
        }
        else{
            $result = "Não foi possível encontrar! Identificação desconhecida.";
        }
        return $result['sala_identificacao'];
    }
    
        public function getDepartamento(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['departamento'];
    }
    
        public function getVista_frontal1(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['vista_frontal1'];
    }
    
        public function getVista_frontal2(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['vista_frontal2'];
    }
    
        public function getVista_panoramica1(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['vista_panoramica1'];
    }
    
        public function getVista_panoramica2(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['vista_panoramica2'];
    }
    
        public function getVista_360(){
        
            if($img = criarD()){
                $result = $img;
            }
            else{
                $result = "Não foi possível encontrar! Identificação desconhecida.";
            }
            return $result['vista_360'];
    }
    public function retorna(){
        $var = new imagensModel();
        return $var.retornaImagens();
    }
}

?>