<?php /* @var $this tpl\Psy */ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Psy</title>
    <link rel="icon" href="<?= SITE ?>core/tpl/psy/img/favicon.ico?<?= CSSJSV ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="<?= SITE ?>core/tpl/psy/css/psy.css?<?= CSSJSV ?>">
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
            Rua Ory Pinheiro Brisola, 9-99 <br>
            Vila Rocha, Bauru/SP
        </div>
        <div class="clock">
            Seg - Sex <br>
            08h00 - 17h00
        </div>
        <div class="phone">
            (19)99999-9999
        </div>
    </section>
    <?php include RAIZ . "core/tpl/psy/inc/menu.html.php" ?>
</header>
<main>
    <?= $this->corpo ?>
</main>
<?php include RAIZ . "core/tpl/psy/inc/footer.html.php" ?>
<script>
    let SITE = '<?= SITE ?>';
</script>
<script src="<?= SITE ?>core/js/core.js?<?= CSSJSV ?>"></script>
<script src="<?= SITE ?>core/tpl/psy/js/psy.js?<?= CSSJSV ?>"></script>
</body>
</html>