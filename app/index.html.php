<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
<link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

<div class="carrossel">
    <img src="freedom.jpeg" alt="">
</div>

<div style="width: 1007px; margin: auto">
    <?= str_repeat('txt ', 1000) ?>
</div>


<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
<script src="index.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>
