<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <title>Document</title>
    </head>
    <body>
<?php
    //recebemos nosso parâmetro vindo do form
    $parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
    $msg = "";
    //começamos a concatenar nossa tabela
    $msg .="<table class='table '>";
                 
                //requerimos a classe de conexão
                require_once('../conexao/conexao_PDO.php');
                    try {
                        $pdo = new con(); 
                        $resultado = $pdo->conectar()->query("SELECT * FROM info_sala WHERE nome LIKE '%$parametro%' or identificacao LIKE '%$parametro%' ORDER BY nome ASC");
                        //resgata os dados na tabela
                        if(count($resultado)){
                            foreach ($resultado as $res) {
                               
                                    $msg .="                <tr>";
                                    $msg .="                    <td><a href='#'>".$res['identificacao']."<a/></td>";
                                    $msg .="                    <td>".$res['nome']."</td>";
                                    $msg .="                </tr>";
                                }
                             
                        }else{
                            $msg = "";
                            $msg .="Nenhum resultado foi encontrado...";
                        }
    $msg .="</table>";
    //retorna a msg concatenada
    echo $msg;

                                 
                        }catch (PDOException $e){
                            echo $e->getMessage();
                        }   
?>    
    </body>             
</html>