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
                <h2><?= strtoupper('Talita Meneses de Almeida Bastos') ?></h2>
                <h1>Seja bem-vindo</h1>
                <p>
                    Psicóloga / Neuropsicóloga. Mestranda em Ciências Médicas pelo Departamento de Neurologia FCM /
                    Unicamp direcionada ao Transtorno do Espectro Autista (TEA). Psicóloga clínica com principal atuação
                    em avaliação psicológica e neuropsicológica em crianças e adolescentes, terapia na abordagem
                    Cognitiva Comportamental para crianças, adolescentes e adultos. Membro e pesquisadora da equipe
                    interdisciplinar do DISAPRE - Laboratório de pesquisa em dificuldades, distúrbios de aprendizagem e
                    transtornos da atenção. Professora convidada dos cursos de especialização em Neuropsicologia
                    aplicada a Neurologia Infantil, FCM Unicamp e das disciplinas de Funções Corticais Superiores da
                    Graduação de Fonoaudiologia, Enfermagem e Medicina/Unicamp.
                </p>
                <div class="botoes">
                    <a href="perfil.php">Leia sobre mim</a>
                </div>
            </div>
        </div>
    </div>

    <div id="stat">
        <div id="servicos">

            <h1>Serviços</h1>

            <div class="item">
                <div class="simbolo">
                    <a class="person"></a>
                </div>
                <h4>Avaliação Psicológica</h4>
                <p>
                    (resumo e texto maior)
                </p>
            </div>

            <div class="item">
                <div class="simbolo">
                    <a class="person"></a>
                </div>
                <h4>Avaliação Neuropsicológica</h4>
                <p>
                    (resumo e texto maior)
                </p>
            </div>

            <div class="item">
                <div class="simbolo">
                    <a class="favorite"></a>
                </div>
                <h4>Intervenção</h4>
                <p>
                    (resumo e texto maior)
                </p>
            </div>

            <div class="item">
                <div class="simbolo">
                    <a class="favorite"></a>
                </div>
                <h4>Orientação / Psicoeducação</h4>
                <p>
                    (para os pais de crianças e adolescentes)
                </p>
            </div>

            <div class="item">
                <div class="simbolo">
                    <a class="favorite"></a>
                </div>
                <h4>Supervisão</h4>
                <p>
                    (para os pais de crianças e adolescentes)
                </p>
            </div>

            <div class="item">
                <div class="simbolo">
                    <a class="favorite"></a>
                </div>
                <h4>Cursos</h4>
                <p>
                    (para os pais de crianças e adolescentes)
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
                    <time datetime="2019-07-21 11:05">21 JULHO 2019</time>
                    <h3>A Pilot Study</h3>
                    <img src="imagens-home/artigo01.jpeg">
                    <div class="botoes">
                        <a class="importante" href="blog/a-pilot-study/">Ler artigo</a>
                    </div>
                </div>
            </div>

            <div class="artigo">
                <div class="card">
                    <time datetime="2019-07-21 11:05">21 JULHO 2019</time>
                    <h3>A Pilot Study</h3>
                    <img src="imagens-home/artigo01.jpeg">
                    <div class="botoes">
                        <a class="importante" href="blog/a-pilot-study/">Ler artigo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="newsletter">

        <h2>Notícias</h2>
        <p>
            Mantenha-se informado sobre as últimas notícias, artigos e eventos.
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