<?php /* @var $this templates\Psy */ ?>
<div id="wp-footer">
    <footer>
        <div class="logo">
            <a href="<?= SITE ?>app/index.php"><?= $this->nome ?></a>
            <p>
                Em minha clínica, eu procuro retomar a vida de meus pacientes a partir do ponto em que estão
                e canalizar suas energias negativas para fora de uma maneira bem coordenada.
                Eu forneço aconselhamento psicológico a todos.
            </p>
        </div>
        <div class="menu">
            <a href="<?= SITE ?>app/index.php">HOME</a>
            <a href="<?= SITE ?>app/index.php">SOBRE</a>
            <a href="<?= SITE ?>app/index.php">AGENDA</a>
            <a href="<?= SITE ?>app/index.php">SERVIÇOS</a>
            <a href="<?= SITE ?>app/blog/index.php">BLOG</a>
            <a href="<?= SITE ?>app/index.php">LOCALIZAÇÃO</a>
            <a href="<?= SITE ?>app/index.php">DEPRESSÃO</a>
            <a href="<?= SITE ?>app/index.php">ANSIEDADE</a>
            <a href="<?= SITE ?>app/index.php">CASAIS</a>
            <a href="<?= SITE ?>app/index.php">INDIVIDUAL</a>
            <a href="<?= SITE ?>app/index.php">PÓS-DIVÓRCIO</a>
            <a href="<?= SITE ?>app/index.php">CRIANÇAS</a>
        </div>
        <div class="contato">
            <p class="phone">
                <a href="tel:(14)99101-9999">(14)99101-9999</a>
            </p>
            <p class="home">
                Rua João Pedreira, 9-99, Vila Rocha, Bauru/SP
            </p>
            <p class="clock">
                Seg - Sex, 08h00 - 17h00
            </p>
        </div>
    </footer>
    <div class="marca">
        <?= $this->nome ?> &copy; 2018 - <?= date('Y') ?>
        <a href="<?= SITE ?>app/index.php">Política de Privacidade</a>
    </div>
</div>