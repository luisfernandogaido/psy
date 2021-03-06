<?php
namespace templates;

use function ob_clean;
use function ob_get_clean;
use function ob_start;

class Psy
{

    public $css;
    public $corpo;
    public $js;

    public $nome;

    /**
     * Psy constructor.
     */
    public function __construct()
    {
        $conf = conf('sistema');
        $this->nome = $conf['nome'];
        define('CSSJSV', $conf['versao_css_js']);
    }

    public function iniCss()
    {
        ob_start();
    }

    public function fimCss()
    {
        $this->css = ob_get_clean();
    }

    public function iniCorpo()
    {
        ob_start();
    }

    public function fimCorpo()
    {
        $this->corpo = ob_get_clean();
    }

    public function iniJs()
    {
        ob_start();
    }

    public function fimJs()
    {
        $this->js = ob_get_clean();
    }

    public function renderiza()
    {
        ob_clean();
        include RAIZ . 'core/templates/psy/psy.html.php';
    }
}