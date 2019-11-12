<?php
/**
 * Controlador de cache
 * Página Laboratório C303
 */
try {
$validadeEmSegundos = 20;
$arquivoCache = 'cache/Labc303cache.html';
$url = 'http://localhost/pjfinal_23_10_2019/DAO/Labc303.php';

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



?>