<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="producao-bibliografica.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<h1>Produção bibliográfica</h1>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="producao-bibliografica.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>