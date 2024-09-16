<?php
$title = "Sobre Mim";
require_once 'assets/templates/head.php';
require_once 'assets/templates/header.php';
require_once 'assets/backend/calculaIdade.php';
?>
<div class="content">
    <?php require_once 'assets/templates/imagem-apresentacao.php' ?>
    <div class="separator"></div>

    <div class="secao-sobre-mim">
        <div class="sobre-mim-texto">

            <div class="secao-1">
                <div>
                    <p class="paragrafo-sobre-mim">
                        Meu nome é Matheus Garcia de Oliveira e tenho <?= $idade ?> anos. Atualmente, estudo Análise e Desenvolvimento de Sistemas, uma área que gosto pela sua capacidade de criar soluções inovadoras.
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
                        Durante meu período na NAJATEC, tive a oportunidade de atuar como estagiário por um ano, onde participei ativamente no desenvolvimento de funcionalidades e na criação de chamadas a API para um sistema interno de gerenciamento de clientes e financeiro. Esse ambiente desafiador me permitiu expandir meus conhecimentos técnicos e colaborar diretamente no aprimoramento das operações internas da empresa.
                        Recentemente, migrei para a Villatore, onde agora atuo como programador Júnior. Na nova empresa, estou focado no desenvolvimento de um e-commerce, que inclui uma integração estratégica com outro sistema interno da Villatore. Essa transição me possibilitou aplicar os conhecimentos adquiridos anteriormente, ao mesmo tempo em que enfrento novos desafios na área de desenvolvimento de plataformas digitais.
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