<?php

/**
 * Aluno: Matheus Garcia de Oliveira
 * RU: 4222054
 * Link para o site: https://portfoliomatheusgarciadeoliveira.000webhostapp.com/index.php
 */

/**
 * Portfólio
 * Neste projeto foi utilizado o COMPOSER gerenciador de pacotes do PHP, para a utilização da biblioteca PHPMailer para envios de email via Código
*/


$title = 'Página Inicial'; // Define o título da página

require_once 'assets/templates/head.php'; // Insere a tag head do html já relacionado com estilos css e fontes
require_once 'assets/templates/header.php'; // Header do site 
?>
<div class="content">
    <?php require_once 'assets/templates/imagem-apresentacao.php' // Imagem de apresentação com a foto de fundo ?>
    <div class="separator"></div>

    <section class="trabalhos">
        <div class="resume-card">
            <div class="image-card">
                <img src="assets/imagens/top11.png" class="card-img">
            </div>

            <div class="resume-content">
                <div class="resume">
                    <span>
                        Estudante de desenvolvimento WEB, atualmente trabalhando na empresa NAJATEC como web developer FULL STACK, onde projeto o design e desenvolvo a lógica dos sites da empresa.
                    </span>
                </div>
                <div class="ver-mais-btn">
                    <a href="/sobre-mim.php">Ver Mais</a>
                </div>
            </div>
        </div>

        <div class="resume-card">
            <div class="image-card">
                <img src="assets/imagens/what-is-github-1-1.png" class="card-img">
            </div>

            <div class="resume-content">
                <div class="resume">
                    <span>
                        Trabalhos publicados no Git Hub
                    </span>
                </div>
                <div class="ver-mais-btn">
                    <a href="/trabalhos.php">Ver Mais</a>
                </div>
            </div>
        </div>

        <div class="resume-card">
            <div class="image-card">
                <img src="assets/imagens/images.png" class="card-img">
            </div>

            <div class="resume-content">
                <div class="resume">
                    <span>
                        Cursando Análise e Desenvolvimento de Sistemas na UNINTER, iniciei em 2022 com previsão para finalizar em 2025
                    </span>
                </div>

                <div class="ver-mais-btn">
                    <a href="/formacao.php">Ver Mais</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once 'assets/templates/footer.php' // Insere o footer do site ?>
