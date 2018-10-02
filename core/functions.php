<?php
function autoload($classe)
{
    $arquivo = RAIZ . str_replace('\\', '/', 'core/' . $classe) . '.php';
    if (file_exists($arquivo)) {
        include $arquivo;
    }
}