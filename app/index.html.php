<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="../core/templates/psy/css/carrossel.css?<?= CSSJSV ?>">
    <link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

    <div class="carrossel">
        <img src="imagens-home/01.jpeg" data-linha1="Be Smart," data-linha2="Help yourself now." data-fonte-clara="0">
        <img src="imagens-home/02.jpeg" data-linha1="Take Care" data-linha2="of your mental health."
             data-fonte-clara="1">
        <img src="imagens-home/03.jpeg" data-linha1="It's time" data-linha2="to solve your problems"
             data-fonte-clara="1">
    </div>

    <div id="wp-perfil">
        <div id="perfil">
            <div class="foto">
                <img src="imagens-home/doctor.jpeg">
            </div>
            <div class="resumo">
                <h2>DENNIS RICHARDSON, MCED, MA, LMHP, CPC</h2>
                <h1>Welcome to my Clinic</h1>
                <p>
                    As a psychologist and a cognitive behavioral therapist I have worked with hundreds of patients and
                    understand the intricacies of various psychological issues that people face.
                    My work revolves around being friendly.
                </p>
                <h3>MB, Harvard University</h3>
                <h3>MMed, University of Michigan</h3>
                <div class="botoes">
                    <a>Read about me</a>
                    <a class="importante">View services</a>
                </div>
            </div>
        </div>
    </div>

    <div id="stat">
        <div>
            <div>

                <h1>My Profile</h1>

                <div class="item">
                    <div class="simbolo">
                        <a class="notification"></a>
                    </div>
                    <h4>Anxiety Therapy</h4>
                    <p>
                        When it comes to treating anxiety disorders, research shows that therapy is usually the most
                        effective option.
                    </p>
                </div>

                <div class="item">
                    <div class="simbolo">
                        <a class="group"></a>
                    </div>
                    <h4>Group Therapy</h4>
                    <p>
                        Group therapy involves one or more psychologists who lead
                        a group of roughly five to 15 patients.
                    </p>
                </div>

                <div class="item">
                    <div class="simbolo">
                        <a class="favorite"></a>
                    </div>
                    <h4>Couples Therapy</h4>
                    <p>
                        Couples therapy is oriented towards solving the problems the couple is facing with each other.
                    </p>
                </div>

            </div>

            <div>

                <div class="numeros">
                    <div class="numero">
                        <span>33</span><br>
                        YEARS OF PRACTICE
                    </div>
                    <div class="numero">
                        <span>12</span><br>
                        AWARDS WON
                    </div>
                    <div class="numero">
                        <span>987</span><br>
                        HAPPY CLIENTS
                    </div>
                    <div class="declaracao">
                        My treatments will help you change "unhelpful patterns" of beliefs, thinking,
                        feelings and behaviours.
                    </div>
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
            <p rel="author">Samantha Green</p>
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