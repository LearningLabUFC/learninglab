<footer>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-colorida.png" alt="imagem logo" class="logo">
        <div class="conteiner-footer">
            
           <div>
                <a><h4>Sobre</h4></a>
                <ul>
                    <li><a <?php if(is_page('cursos') == true ) { echo 'ativo';} ?>" aria-current="cursos" href="<?php echo get_home_url(); ?>/sobre">Nossa equipe</a></li>
                    <li><a href="#">O projeto</a></li>
                    <li><a href="#">Iniciativas</a></li>

                </ul>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_insta.png" alt="icone instagram" class="icone-redeSocial"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_face.png" alt="icone facebook" class="icone-redeSocial"></a>

           </div> 
           <div>
                <a><h4>Contato</h4></a>
                <ul >
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_email.png" alt="icone email" >
                        <p>learninglab@ufc.br</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icone_tel.png" alt="icone telefone">
                        <p>(88) 3411-2143</p>
                    </li>
                    
                </ul>

            </div> 
            <div>
                <a><h4>Cursos disponíveis</h4></a>
                <ul>
                    <li><a href="#">SCRUM na prática</a></li>
                    <li><a href="#">Desenvolvimento web</a></li>
                    <li><a href="#">Git e Github</a></li>
                    <li><a href="#">Código limpo</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Figmatizando ideias: figma para iniciantes</a></li>

                </ul>

            </div> 

        </div>
        <p>Todos os direitos reservados. 2022.</p>
    </footer>

<?php wp_footer(); ?>
</body>
</html>