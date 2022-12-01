<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . ' | ' .  bloginfo('description') ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/imgs/logotipo.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
<div class="cabecalho">
    <header>
        <a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-branca.png"  alt="logo" class="logo"></a>
        <nav>
       
         <input type="checkbox" id="checkbox-menu">
        
            <div class="icone-menu-mobile">
                
                <label class="label-header" for="checkbox-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
           
                
            <ul class="nav-menu"> 
                <li><a <?php if(is_page('sobre') == true ) { echo 'ativo';} ?>" aria-current="sobre" href="<?php echo get_home_url(); ?>/sobre">Sobre</a></li>
                <li><a <?php if(is_page('blog') == true ) { echo 'ativo';} ?>" aria-current="blog" href="<?php echo get_home_url(); ?>/blog">Blog</a></li>
                <li class="sub-menu">
                    <a href="index.php/cursos" id="item">Cursos </a>
                </li>
                <li><a href="index.php/contato">Contato</a></li>
                <li ><a href="#" class="botao-header" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="botao-header">Vem fazer parte do time </a></li>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Formulário de inscrição</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    No momento nosso processo seletivo não está aberto ;)
                </div>                   
                    </div>
                </div>
                </div>
            </ul>
            
        </nav>
    </header>
</div>