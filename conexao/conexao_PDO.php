<?php
/*
define('MSQL_HOST','localhost');
define('MSQL_USER','root');
define('MSQL_PASSWORD','');
define('MSQL_DB_NAME','mapa_cefet');*/



class con{
    public function conectar(){
        
        $host ="localhost";
        $database = "mapa_cefet";
        $usuario = "root";
        $senha ="";
        $bool = true;
try
{
    $PDO = new PDO( "mysql:host=$host;dbname=$database",$usuario,$senha);
    $PDO->exec("set names utf8");

}
catch ( PDOException $e )
{
    $bool = false;
    echo $e;
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
    return $PDO;
}
    
    /*
    $sql_salas = "SELECT * FROM salas";
    $sql_detalhes = "SELECT * FROM detalhes";
    $sql_imagens = "SELECT * FROM imagens";

    $consulta_salas = $PDO->query($sql_salas);
    $result_detalhes = $PDO->query($sql_detalhes);
    $result_imagens = $PDO->query($sql_imagens);
    $result = $consulta_salas->fetchAll();
    */


}

    
/* Laço para apresentar os dados
*    while($result = $consulta_salas->fetch(PDO::FETCH_OBJ)){
*       echo $result->nome.'</br>'; 
*   }
*/




?>