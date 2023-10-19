<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . ' | ' .  bloginfo('description') ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/logocolorida.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
<div class="cabecalho">
    <header>
        <a <?php if(is_page('home') == true ) { echo 'ativo';} ?> aria-current="home" href="<?php echo get_home_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-branca.png"  alt="logo" class="logo-header"></a>
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
                <li class="menu-item"><a <?php if(is_page('sobre') == true ) { echo 'ativo';} ?>" aria-current="sobre" href="<?php echo get_home_url(); ?>/sobre">Sobre</a></li>
                <li class="menu-item"><a <?php if(is_page('blog') == true ) { echo 'ativo';} ?>" aria-current="blog" href="<?php echo get_home_url(); ?>/blog">Blog</a></li>
                <li class="menu-item"><a <?php if(is_page('cursos') == true ) { echo 'ativo';} ?>" aria-current="cursos" href="<?php echo get_home_url(); ?>/cursos">Cursos</a></li>
                <li class="menu-item"><a <?php if(is_page('contato') == true ) { echo 'ativo';} ?>" aria-current="contato" href="<?php echo get_home_url(); ?>/contato">Contato</a></li> 
                <li ><a class="link-gamificacao">Gamificação</a>
                <ul class="submenu">
                <li><a <?php if(is_page('gameficacao') == true ) { echo 'ativo';} ?>" aria-current="gameficacao" href="<?php echo get_home_url(); ?>/gameficacao">Gamificacao Estadual</a></li>
                <li><a <?php if(is_page('gameficacao-eep') == true ) { echo 'ativo';} ?>" aria-current="gameficacao-eep" href="<?php echo get_home_url(); ?>/gameficacao-eep">Gamificacao EEEP</a></li>
                <li><a <?php if(is_page('gameficacao-sescomp') == true ) { echo 'ativo';} ?>" aria-current="gameficacao-sescomp" href="<?php echo get_home_url(); ?>/gameficacao-sescomp">Gamificacao Sescomp</a></li>
                </ul>
            </li> 
                

                <!-- Modal -->
                <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Formulário de inscrição</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Link do formulário para preenchimento:</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScKtgsGPqCVdwckhiwWWxP02ZwL-NtxzwndQ-7jc3mBbkKlmw/viewform" target="_blank">Increva-se</a>
                </div>                   
                    </div>
                </div> -->
                <!-- </div> -->
            </ul>
            
        </nav>
    </header>
</div>