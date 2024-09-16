<?php
$page_links = [
    "Sobre Mim" => "sobre-mim.php",
    "Formação" => "formacao.php",
    "Trabalhos" => "trabalhos.php",
    "Contato" => "contato.php"
]; // Lista de links disponíveis na header de navegação
?>
<header class="header">
    <div class="logo"><a href="/index.php">Portfólio</a></div>
    <div class="links">
        <ul class="lista">
            <?php foreach ($page_links as $link => $page) : ?>
                <li>
                    <a href="/<?= $page ?>" class="page-links"><?= $link ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>