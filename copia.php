<?php get_header(); ?>

    <section class="container-contato">
        
        <div class="contato">
                <h1>Entre em contato com nossa equipe</h1>
        
                <a href="#"><img src="imagens/icone_email_branco.svg" alt="iconde de email"> email@email.com</a>
                <a href="#"><img src="imagens/icone_telefone_branco.svg" alt="icone telefone"> (99) 9 9999-9999 (99) 9 9999-9999</a>
                <div class="midias-sociais">
                    <a href="#"><img src="imagens/icone_instagram_branco.svg" alt=""> @learninglab</a>
                    <a href="facebook"> <img src="imagens/icone_facebook_branco.svg" alt="">@learninglab</a>
                </div>
            
        </div>

        
            <div class="formulario">
            <?php echo do_shortcode( '[contact-form-7 id="32" title="Formulário de contato 1"]');?>
            </div>       
        

      

    </section>

<?php get_footer(); ?>
