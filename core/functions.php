<?php
function autoload($classe)
{
    $arquivo = RAIZ . str_replace('\\', '/', 'core/' . $classe) . '.php';
    if (file_exists($arquivo)) {
        include $arquivo;
    }
}

function conf(string $configuracao): array
{
    $arquivo = RAIZ . 'conf/' . $configuracao . '.php';
    if (!file_exists($arquivo)) {
        throw new \Exception('Configuração ' . $configuracao . ' inexistente.');
    }
    return include($arquivo);
}