<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="../core/templates/psy/css/carrossel.css?<?= CSSJSV ?>">
    <link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

    <div class="carrossel">
        <img src="imagens-home/01.jpeg"
             data-linha1="É hora"
             data-linha2="de resolver seus problemas"
             data-fonte-clara="0">
        <img src="imagens-home/03.jpeg"
             data-linha1="Seja inteligente,"
             data-linha2="Ajude a si mesmo agora."
             data-fonte-clara="0">
        <img src="imagens-home/02.jpeg"
             data-linha1="Cuide"
             data-linha2="de sua saúde mental."
             data-fonte-clara="0">
    </div>

    <div id="wp-perfil">
        <div id="perfil">
            <div class="foto">
                <img src="imagens-home/doctor.jpeg">
            </div>
            <div class="resumo">
                <h2><?= strtoupper($template->nome) ?>, MCED, MA, LMHP, CPC</h2>
                <h1>Bem-vindo à minha clínica</h1>
                <p>
                    Como psicóloga e terapeuta cognitiva-comportamental eu tenho trabalhado com centenas de pacientes e
                    entendido as complexidades de vários problemas psicológicos que as pessoas enfrentam.
                    Meu trabalho gira em torno de ser amigável.
                </p>
                <h3>MB, Harvard University</h3>
                <h3>MMed, University of Michigan</h3>
                <div class="botoes">
                    <a>Leia sobre mim</a>
                    <a class="importante">Ver serviços</a>
                </div>
            </div>
        </div>
    </div>

    <div id="stat">
        <div>
            <div>

                <h1>Meu perfil</h1>

                <div class="item">
                    <div class="simbolo">
                        <a class="notification"></a>
                    </div>
                    <h4>Terapia de ansiedade</h4>
                    <p>
                        Quando é necessário tratar desordens de ansiedade, pesquisas mostram que a terapia é geralmente
                        a opção mais efetiva.
                    </p>
                </div>

                <div class="item">
                    <div class="simbolo">
                        <a class="group"></a>
                    </div>
                    <h4>Terapia de grupo</h4>
                    <p>
                        Terapia de grupo envolve um ou mais psicólogos que conduzem um grupo de aproximadamente
                        cinco a quinze pacientes.
                    </p>
                </div>

                <div class="item">
                    <div class="simbolo">
                        <a class="favorite"></a>
                    </div>
                    <h4>Terapia de casais</h4>
                    <p>
                        Terapia de casais é orientada para resolver os problemas que o casal está enfrentando um com
                        o outro.
                    </p>
                </div>

            </div>

        </div>
    </div>

    <div id="artigos">
        <div>

            <h2>Artigos em destaque</h2>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-25 20:00">25 MARÇO 2017</time>
                    <h3>Insônia: Terapia Cognitica Comportamental</h3>
                    <img src="imagens-home/artigo01.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-14 20:00">14 MARÇO 2017</time>
                    <h3>Aconselhamento matrimonial e terapia em família</h3>
                    <img src="imagens-home/artigo02.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-07 20:00">07 MARÇO 2017</time>
                    <h3>Regras Importantes para Pais Adolescentes</h3>
                    <img src="imagens-home/artigo03.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-25 20:00">25 MARÇO 2017</time>
                    <h3>Insônia: Terapia Cognitica Comportamental</h3>
                    <img src="imagens-home/artigo01.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-14 20:00">14 MARÇO 2017</time>
                    <h3>Aconselhamento matrimonial e terapia em família</h3>
                    <img src="imagens-home/artigo02.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2017-03-07 20:00">07 MARÇO 2017</time>
                    <h3>Regras Importantes para Pais Adolescentes</h3>
                    <img src="imagens-home/artigo03.jpeg">
                    <div class="botoes">
                        <a class="importante">Ler artigo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="testemunhos">
        <div>
            <h2>Testemunhos</h2>
            <q>
                Talita tocou meu coração profundamente durante a fase em que eu estava desesperadamente precisando
                de alguém para me ajudar.
            </q>
            <p rel="author">Samantha Ferreira</p>
            <p>Designer de interiores</p>
            <div class="botoes">
                <a class="importante">Mais testemunhos</a>
            </div>
        </div>
    </div>

    <div id="newsletter">

        <h2>Notícias</h2>
        <p>
            Mantenha-se informado sobre as últimas notícias e eventos.
        </p>
        <div class="wp-email">
            <input type="email" placeholder="Digite aqui seu e-mail">
        </div>
        <div class="botoes">
            <a class="importante">Inscrever-se</a>
        </div>
    </div>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="../core/templates/psy/js/carrossel.js?<?= CSSJSV ?>"></script>
    <script src="index.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>