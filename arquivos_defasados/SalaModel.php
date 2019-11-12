<?php
include 'conexao_PDO.php';

class SalaModel{
    private function consultar($id,$campo,$tabela){
        $conexao = new con();
        $PDO = $conexao->conectar();
        $sql_consulta = "select ".$campo." from ".$tabela." where identificacao = ".$id;
        $consulta = $PDO->query($sql_consulta);
        $r = array();
        //Preenche o array $r com a consulta vinda do banco de dados
        while ($result = $consulta->fetch(PDO::FETCH_ASSOC)){
            array_push($r,$result); 
        }
        $resultado = $r;
        if(count($r) == 0){
            $resultado = "Sala ou campo não encontrado!";
        }
        
        return $resultado;
    }


}

?>