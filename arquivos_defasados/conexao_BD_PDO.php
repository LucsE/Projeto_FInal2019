<?php
define('MSQL_HOST','localhost');
define('MSQL_USER','root');
define('MSQL_PASSWORD','');
define('MSQL_DB_NAME','mapa_cefet');

try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

$PDO->exec("set names utf8");

$sql_salas = "SELECT * FROM salas";
$sql_detalhes = "SELECT * FROM detalhes";
$sql_imagens = "SELECT * FROM imagens";

$result_salas = $PDO->query($sql_salas);
$result_detalhes = $PDO->query($sql_detalhes);
$result_imagens = $PDO->query($sql_imagens);

foreach($result_salas as $var){
    
        echo $var->$nome;
}
?>
