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
            <a href="<?= SITE ?>app/perfil.php">PERFIL</a>
            <a href="<?= SITE ?>app/producao-bibliografica.php">PRODUÇÃO BIBLIOGRÁFICA</a>
            <a href="<?= SITE ?>app/eventos.php">EVENTOS</a>
            <a href="<?= SITE ?>app/servicos/avaliacao-psicologica.php">AVALIAÇÃO PSICOLÓGICA</a>
            <a href="<?= SITE ?>app/servicos/avaliacao-neuropsicologica.php">AVALIAÇÃO NEUROPSICOLÓGICA</a>
            <a href="<?= SITE ?>app/servicos/intervencao.php">INTERVENÇÃO</a>
            <a href="<?= SITE ?>app/servicos/orientacao-psicoeducacao.php">PSICOEDUCAÇÃO</a>
            <a href="<?= SITE ?>app/servicos/supervisao.php">SUPERVISÃO</a>
            <a href="<?= SITE ?>app/servicos/cursos.php">CURSOS</a>
            <a href="<?= SITE ?>app/blog/index.php">ARTIGOS</a>
            <a href="<?= SITE ?>app/blog/leituras-indicadas.php">LEITURAS INDICADAS</a>
            <a href="<?= SITE ?>app/parcerias.php">PARCERIAS</a>
            <a href="<?= SITE ?>app/localizacao.php">LOCALIZAÇÃO</a>
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
    </div>
</div>