<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="avaliacao-neuropsicologica.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<h1>Avaliação neuropsicológica</h1>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="avaliacao-neuropsicologica.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>