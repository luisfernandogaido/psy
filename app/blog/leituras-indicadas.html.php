<?php $template = new templates\Psy() ?>

<?php $template->iniCss() ?>
    <link rel="stylesheet" href="leituras-indicadas.css?<?= CSSJSV ?>">
<?php $template->fimCss() ?>

<?php $template->iniCorpo() ?>

    <div id="artigos">
        <div>

            <h2>Leituras indicadas</h2>

            <div class="artigo">
                <div class="card">
                    <time datetime="2019-07-21 11:05">21 JULHO 2019</time>
                    <h3>A Pilot Study</h3>
                    <img src="a-pilot-study/capa.jpeg">
                    <div class="botoes">
                        <a class="importante" href="a-pilot-study/">Ler artigo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $template->fimCorpo() ?>

<?php $template->iniJs() ?>
    <script src="leituras-indicadas.js?<?= CSSJSV ?>"></script>
<?php $template->fimJs() ?>

<?php $template->renderiza() ?>