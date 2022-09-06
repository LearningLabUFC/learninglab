<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . ' | ' .  bloginfo('description') ?></title>

    <?php wp_head(); ?>
</head>
<body>
<header>
        <a href="file:///C:/Users/Eurilaine/Desktop/ufc%20russas/Est%C3%A1gio/vers%C3%A3o%20site/index.html#"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png"  alt="logo"></a>
        <nav>
            <div class="icone-menu-mobile">
                <span></span>
                <span></span>
                <span></span>

            </div>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="file:///C:/Users/Eurilaine/Desktop/ufc%20russas/Est%C3%A1gio/vers%C3%A3o%20site/page-blog.html">Blog</a></li>
                <li class="menu-curso">
                    <a href="index.php/cursos">Cursos <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/sinal-de-seta-para-baixo-para-navegar.png" alt="imagem setinha" > </a>
                    <ul>
                        <li><a href="#">Cursos em andamentos</a></li>
                        <li><a href="#">Cursos presenciais</a></li>
                        <li><a href="#">Ver todos os cursos</a></li>
                    </ul>
                </li>
                <li><a href="#">Contato</a></li>
                <li ><a href="https://www.youtube.com/" class="botao-header">Vem fazer parte do time </a></li>
            </ul>
        </nav>
    </header>