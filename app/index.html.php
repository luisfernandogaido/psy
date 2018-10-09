<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="../core/templates/psy/css/carrossel.css?<?= CSSJSV ?>">
    <link rel="stylesheet" href="index.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

    <div class="carrossel">
        <img src="01.jpeg" data-linha1="Be Smart," data-linha2="Help yourself now." data-fonte-clara="0">
        <img src="02.jpeg" data-linha1="Take Care" data-linha2="of your mental health." data-fonte-clara="1">
        <img src="03.jpeg" data-linha1="It's time" data-linha2="to solve your problems" data-fonte-clara="1">
    </div>

    <div id="wp-perfil">
        <div id="perfil">
            <div class="foto">
                <img src="doctor.jpeg">
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
                    <a class="simbolo"></a>
                    <h4>Anxiety Therapy</h4>
                    <p>
                        When it comes to treating anxiety disorders, research shows that therapy is usually the most
                        effective option.
                    </p>
                </div>

                <div class="item">
                    <a class="simbolo"></a>
                    <h4>Anxiety Therapy</h4>
                    <p>
                        When it comes to treating anxiety disorders, research shows that therapy is usually the most
                        effective option.
                    </p>
                </div>

                <div class="item">
                    <a class="simbolo"></a>
                    <h4>Anxiety Therapy</h4>
                    <p>
                        When it comes to treating anxiety disorders, research shows that therapy is usually the most
                        effective option.
                    </p>
                </div>

            </div>
            <div>2</div>
        </div>
    </div>


<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="../core/templates/psy/js/carrossel.js?<?= CSSJSV ?>"></script>
    <script src="index.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>