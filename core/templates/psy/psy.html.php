<?php /* @var $this templates\Psy */ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->nome ?></title>
    <link rel="icon" href="<?= SITE ?>core/templates/psy/img/meu-cerebro.png?<?= CSSJSV ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="<?= SITE ?>core/templates/psy/css/psy.css?<?= CSSJSV ?>">
    <?= $this->css ?>
</head>
<body>
<header>
    <a id="hamburguer"></a>
    <a id="logo" href="<?= SITE ?>app/index.php">
        <?= $this->nome ?>
    </a>
    <a id="call"></a>
    <?php include RAIZ . "core/templates/psy/inc/contato.html.php" ?>
    <?php include RAIZ . "core/templates/psy/inc/menu.html.php" ?>
</header>
<main>
    <?= $this->corpo ?>

    <div id="to-top"></div>

</main>
<?php include RAIZ . "core/templates/psy/inc/footer.html.php" ?>
<script>
  let SITE = '<?= SITE ?>';
</script>
<script src="<?= SITE ?>core/js/core.js?<?= CSSJSV ?>"></script>
<script src="<?= SITE ?>core/templates/psy/js/psy.js?<?= CSSJSV ?>"></script>
<?= $this->js ?>
<!-- <?= deltaT() ?> -->
</body>
</html>