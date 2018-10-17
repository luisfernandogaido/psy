<?php
define('RAIZ', str_replace('\\', '/', __DIR__) . '/');
include RAIZ . 'core/functions.php';
define('SITE', str_replace($_SERVER['DOCUMENT_ROOT'], '', RAIZ));
spl_autoload_register('autoload');