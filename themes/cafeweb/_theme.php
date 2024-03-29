<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
</head>
<body>

<!--HEADER-->
<header class="main_header gradient gradient-green">
    <div class="container">
        <div class="main_header_logo">
            <h1><a class="" title="Home" href="<?= url(); ?>">Dalva<b>Control</b></a></h1>
        </div>

        <!--<nav class="main_header_nav">
            <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
            <div class="main_header_nav_links j_menu_mobile_tab">
                <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                <a class="link transition radius" title="Home" href="<?= url(); ?>">Home</a>
                <a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Sobre</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>
                <a class="link login transition radius icon-sign-in" title="Entrar"
                   href="<?= url("/entrar"); ?>">Entrar</a>
            </div>
        </nav>-->
    </div>
</header>

<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<?php if ($v->section("optout")): ?>
    <?= $v->section("optout"); ?>
<?php else: ?>

<?php endif; ?>

<!--FOOTER-->
<footer class="main_footer">
    <div class="container content">
        <section class="main_footer_content">
            <article class="main_footer_content_item">
                <h2>Sobre:</h2>
                <p>O DalvaControl foi criado para gerenciar o cadastro de contato dos responsáveis de alunos da nossa escola.</p>
                <a title="Termos de uso" href="<?= url("/termos"); ?>">Termos de uso</a>
            </article>

            <article class="main_footer_content_item">
                <h2>Mais:</h2>
                <a class="link transition radius" title="Home" href="<?= url(); ?>">Home</a>
                <!--<a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Sobre</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>
                <a class="link transition radius" title="Entrar" href="<?= url("/entrar"); ?>">Entrar</a>-->
            </article>

            <article class="main_footer_content_item">
                <h2>Contato:</h2>
                <p class="icon-phone"><b>Telefone:</b><br> +55 21 3423.7806 / 3423.7807</p>
                <p class="icon-envelope"><b>Email:</b><br> diretora@dalvadeoliveira.com.br</p>
                <p class="icon-map-marker"><b>Endereço:</b><br> <?= CONF_SITE_ADDR_STREET. ' '.CONF_SITE_ADDR_CITY .'-'.CONF_SITE_ADDR_STATE?></p>
            </article>

            <article class="main_footer_content_item social">
                <h2>Social:</h2>
                <a target="_blank" class="icon-facebook"
                   href="https://www.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE; ?>" title="DalvaControl no Facebook">/Família Dalva de Oliveira</a>

            </article>
        </section>
    </div>
</footer>

<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>