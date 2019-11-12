<html>
<body>
<?php
/*
include('conexao_PDO.php');
/*
include_once('Info_SalaDAO.php');
include_once('ImagensDAO.php');
include_once('ImagensModel.php');
include_once('Info_SalaModel.php');*/
include_once('SalasController.php');
/*$img = new ImagensModel();
$objeto = new Info_SalaModel();
$imgd = new ImagensDAO();
$infd = new Info_SalaDAO();

$objeto->setIdentificacao('C201');
$objeto->setDepartamento('Laboratórios');
$objeto->setLocalizacao('2° andar bloco C');
$objeto->setPonto_de_Referencia('Ao lado direito da escada próxima ao auditório');
$objeto->setResponsavel('Bruno Guedes');
$objeto->setDescricao('Laboratório de software.');
$objeto->setTelefone('');
$objeto->setHorario_Funcionamento('Horário de aula.');

$a = array();
$a = $infd->retornarTabela();

if(sizeof($a) > 0){
    echo '<br>'.'<br>'.'oi'.'<br>';
    print_r($a);
    //echo $a['identificacao'];
}*/
$a = new SalasController();
$matriz =  $a->PrepararDepartamento('Laboratório');

//print_r($matriz);
//echo('<br>'.'menos mau');
?>
<input type='text' value='<?php echo $matriz[1]["nome"] ?>'>
</body>
</html>
