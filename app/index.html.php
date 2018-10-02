<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
<link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>



<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
<script src="index.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>
