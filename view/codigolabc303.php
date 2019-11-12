<?php
require_once('../controller/SalasController.php');
//$identificacao deverá receber um valor passado por um formulário da página anterior
$identificacao = 'C303'; 
$controller = new SalasController();
$sala = $controller->PrepararSala( $identificacao);

?>