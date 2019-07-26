<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="intervencao.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

    <h1>Intervenção</h1>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="intervencao.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>