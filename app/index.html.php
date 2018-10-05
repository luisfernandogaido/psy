<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
<link rel="stylesheet" href="../core/templates/psy/css/carrossel.css?<?= CSSJSV ?>">
<link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<div class="carrossel">
    <img src="freedom.jpeg" data-linha1="Be Smart," data-linha2="help yourself now." data-fonte-clara="1">
    <img src="paisagem.jpeg" data-linha1="Take Care" data-linha2="of your mental health." data-fonte-clara="0">
    <img src="mao.jpeg" data-linha1="It's time" data-linha2="to solve your problems." data-fonte-clara="1">
</div>

<?= str_repeat('txt ', 3000) ?>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
<script src="../core/templates/psy/js/carrossel.js?<?= CSSJSV ?>"></script>
<script src="index.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>
