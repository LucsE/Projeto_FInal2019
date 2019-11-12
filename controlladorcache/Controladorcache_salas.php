<?php
/**
 * Controlador de cache
 * Página Laboratório C303
 */
//A ideia inicial é a lista de endereços dos sites das salas vir de uma arquivo gerado e mantido pelo ADM
$endereco_do_site_de_cada_sala = "É um array associativo no qual a identificação da sala é a chave referenciando o link dela";
$linksalas = $endereco_do_site_de_cada_sala;
function carregar($identificacao){
try {
$validadeEmSegundos = 20;
$arquivoCache = 'cache/'.$nome.'.html';
$url = $linksalas[$identificacao];;

// Verifica se o arquivo cache existe e se ainda é válido
if (file_exists($arquivoCache) && (filemtime($arquivoCache) > time() - $validadeEmSegundos)) {

    // Lê o arquivo cacheado
    $conteudo = file_get_contents($arquivoCache);
} else {

    // Acessa a versão dinâmica
    $conteudo = file_get_contents($url);

    // Cria o cache
    file_put_contents($arquivoCache, $conteudo);
}

// Exibe o conteúdo da página
echo $conteudo;
} catch (\Throwable $th) {
    throw $th;
}

}

?>