<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="parcerias.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<h1>Parcerias</h1>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="parcerias.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>