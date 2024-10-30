<footer>
        <a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-colorida.png" alt="imagem logo" class="logo"></a> 
        <div class="conteiner-footer">
            
           <div>
                <a><h4>Sobre</h4></a>
                <ul>
                    <li><a <?php if(is_page('cursos') == true ) { echo 'ativo';} ?>" aria-current="cursos" href="<?php echo get_home_url(); ?>/sobre">Nossa equipe</a></li>
                    <li><a a <?php if(is_page('blog') == true ) { echo 'ativo';} ?>" aria-current="blog" href="<?php echo get_home_url(); ?>/blog">Iniciativas</a></li>

                </ul>
               
           </div> 
           <div>
                <a><h4>Redes Sociais</h4></a>
                
                <a href="https://www.instagram.com/learninglabufc/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_insta.png" alt="icone instagram" class="icone-redeSocial"></a>
                <a href="https://www.linkedin.com/company/projeto-learninglab/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone-linkedin-verde.svg" alt="icone linkedin" class="icone-redeSocial"></a>

           </div> 
           <div>
                <a><h4>Contato</h4></a>
                <ul >
                    <li>
                        <a href="mailto:learninglab@ufc.br">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_email.png" alt="icone email" >
                        <p>learninglab@ufc.br</p>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+558834112143">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_tel.png" alt="icone telefone">
                        <p>(88) 3411-2143</p>
                        </a>
                    </li>
                    
                </ul>

            </div> 
            <div>
                <a><h4>Alguns dos nossos cursos</h4></a>
                <ul>
                    <li>SCRUM na prática</li>
                    <li>Desenvolvimento web</li>
                    <li>Git e Github</li>
                    <li>Código limpo</li>
                    <li>Figmatizando ideias</li>

                </ul>

            </div> 
            <div>
                <a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone-page-inicial.svg" alt="icone pagina inicial" class="icone-inicial"></a>

            </div> 

        </div>
        <p>Todos os direitos reservados. 2024.</p>
    </footer>

<?php wp_footer(); ?>
</body>
</html>