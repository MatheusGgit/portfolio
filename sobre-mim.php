<?php
$title = "Sobre Mim";
require_once 'assets/templates/head.php';
require_once 'assets/templates/header.php'
?>
<div class="content">
    <?php require_once 'assets/templates/imagem-apresentacao.php' ?>
    <div class="separator"></div>

    <div class="secao-sobre-mim">
        <div class="sobre-mim-texto">

            <div class="secao-1">
                <div>
                    <p class="paragrafo-sobre-mim">
                        Meu nome é Matheus Garcia de Oliveira e tenho 20 anos. Atualmente, estudo Análise e Desenvolvimento de Sistemas, uma área que gosto pela sua capacidade de criar soluções inovadoras.
                    </p>
                </div>

                <div class="img-secao">
                    <img src="assets/imagens/workstation.png">
                </div>
            </div>

            <div class="separator"></div>

            <div class="secao-1">
                <div class="img-secao-esquerda">
                    <img src="assets/imagens/full-stack.jpg">
                </div>

                <div>
                    <p class="paragrafo-sobre-mim">
                        Na empresa NAJATEC, atuo como desenvolvedor WEB FULL STACK, No momento, estou focado em renovar o site da empresa e implementar microserviços para aprimorar a experiência do usuário.
                    </p>
                </div>
            </div>

            <div class="separator"></div>
            
            <div class="secao-1">
                <div>
                    <p class="paragrafo-sobre-mim">
                        Minha verdadeira paixão reside na linguagem PHP. Meu objetivo atual é aprimorar minhas habilidades na linguagem, explorando novas técnicas e ferramentas para me tornar um desenvolvedor ainda mais eficiente e criativo.
                    </p>
                </div>

                <div class="img-secao">
                    <img src="assets/imagens/desenvolvimento.png">
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'assets/templates/footer.php' ?>