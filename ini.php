<?php
define('RAIZ', str_replace('\\', '/', __DIR__) . '/');
include RAIZ . 'core/functions.php';
spl_autoload_register('autoload');
define('SITE', $_SERVER['REQUEST_SCHEME'] . '://' . str_replace('//', '/',
        $_SERVER['HTTP_HOST'] . '/' . str_replace([$_SERVER['DOCUMENT_ROOT'], '/'], '', RAIZ) . '/'));
define('CSSJSV', 4);