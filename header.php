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
        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png"  alt="logo" class="logo"></a>
        <nav>
       
         <input type="checkbox" id="checkbox-menu">
        
            <div class="icone-menu-mobile">
                
                <label for="checkbox-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
           
                
            <ul class="nav-menu"> 
                <li><a href="#">Sobre</a></li>
                <li><a href="index.php/blog">Blog</a></li>
                <li class="sub-menu">
                    <a href="index.php/cursos" id="item">Cursos <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/sinal-de-seta-para-baixo-para-navegar.png" alt="imagem setinha" > </a>
                    <ul>
                        <li><a href="#">Cursos em andamentos</a></li>
                        <li><a href="#">Cursos presenciais</a></li>
                        <li><a href="#">Ver todos os cursos</a></li>
                    </ul>
                </li>
                <li><a href="#">Contato</a></li>
                <li ><a href="#" class="botao-header" id="botao-header">Vem fazer parte do time </a></li>
            </ul>
            
        </nav>
    </header>
    