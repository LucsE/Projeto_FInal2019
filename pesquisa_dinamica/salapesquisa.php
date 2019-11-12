<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){ 
     
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                data: valores,
                success: function(msg)
                {
                    var data = msg;
                    $(div).html(data).fadeIn();             
                }
            });
    }
     
     
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#ondepesquisa').keyup(function(){
         
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
         
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
         
        if($parametro.length >= 1)
        {
            load_dados(valores, 'pesquisa.php', '#MostraPesquisa');
        } 
    });
 
    });
    </script>
    <title>Document</title>
</head>
<body>
<article>
            <form name="form_pesquisa" id="form_pesquisa" method="post" action="">
                <fieldset>
                    <legend>Digite o nome a pesquisar</legend>
                        <div class="">
                            
                            <input type="text" name="ondepesquisa" id="ondepesquisa" value="" tabindex="1" placeholder="Pesquisar cliente..." />
                        </div>
                </fieldset>
            </form>
            <div id="contentLoading">
                <div id="loading"></div>
            </div>
            <section class="">
                <div id="MostraPesquisa"></div>
            </section>
        </article>
</body>
</html>