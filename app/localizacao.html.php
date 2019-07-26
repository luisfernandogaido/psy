<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="localizacao.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<h1>Localização</h1>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="localizacao.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>