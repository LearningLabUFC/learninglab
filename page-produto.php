<?php get_header(); ?>

<section class="conteiner-inicial-produto">
        <h1>Nossos Produtos</h1>
</section>
<section class="conteiner-produtos">
        <div class="painel-produto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/siteeu.png" alt="imagem">
            <div class="descricao-produto">
                <h3>Site do EU 2022</h3>
                <p>O site do Encontros Universitários foi desenvolvido pelos membros do projeto LearningLab. você sabia?
                </p>
            </div>
            <a href="http://200.129.62.41/encontros/" target="_blank"><button>Visitar</button></a>

        </div>
        <div class="painel-produto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imglogo.png" alt="imagem">
            <div class="descricao-produto">
                <h3>StudyUFC</h3>
                <p>Alunos do projeto Learning Lab, criam sistema para ajudar outros alunos</p>
            </div>
            <a <?php if(is_page('noticiastudyufc') == true ) { echo 'ativo';} ?>" aria-current="noticiastudyufc" href="<?php echo get_home_url(); ?>/noticiastudyufc"><button>Ver mais</button></a>

        </div>
</section>
<?php get_footer(); ?>