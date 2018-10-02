<?php
namespace tpl;

use function ob_clean;
use function ob_get_clean;
use function ob_start;

class Psy
{

    public $css;
    public $corpo;
    public $js;

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
        include RAIZ . 'core/tpl/psy/psy.html.php';
    }
}