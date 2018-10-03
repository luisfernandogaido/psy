<?php /* @var $this templates\Psy */ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Psy</title>
    <link rel="icon" href="<?= SITE ?>core/templates/psy/img/favicon.ico?<?= CSSJSV ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="<?= SITE ?>core/templates/psy/css/psy.css?<?= CSSJSV ?>">
    <?= $this->css ?>
</head>
<body>
<header>
    <a id="hamburguer"></a>
    <a id="logo" href="<?= SITE ?>app/index.php">
        Especialista
    </a>
    <a id="call"></a>
    <section class="contato">
        <div class="home">
            Rua João Pedreira, 9-99 <br>
            Vila Rocha, Bauru/SP
        </div>
        <div class="clock">
            Seg - Sex, 08h00 - 17h00
        </div>
        <div class="phone">
            <a href="tel:(14)99101-9999">(14)99101-9999</a>
        </div>
    </section>
    <?php include RAIZ . "core/templates/psy/inc/menu.html.php" ?>
</header>
<main>
    <?= $this->corpo ?>
</main>
<?php include RAIZ . "core/templates/psy/inc/footer.html.php" ?>
<script>
  let SITE = '<?= SITE ?>';
</script>
<script src="<?= SITE ?>core/js/core.js?<?= CSSJSV ?>"></script>
<script src="<?= SITE ?>core/templates/psy/js/psy.js?<?= CSSJSV ?>"></script>
<?= $this->js ?>
</body>
</html>