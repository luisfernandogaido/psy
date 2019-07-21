<?php
define('RAIZ', str_replace('\\', '/', __DIR__) . '/');
include RAIZ . 'core/functions.php';
define('SITE', $_SERVER['REQUEST_SCHEME'] . '://' . str_replace('//', '/',
        $_SERVER['HTTP_HOST'] . '/' . str_replace([$_SERVER['DOCUMENT_ROOT'], '/'], '', RAIZ) . '/'));
spl_autoload_register('autoload');