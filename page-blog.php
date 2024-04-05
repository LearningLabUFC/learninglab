<?php get_header(); ?>

    <section class="conteiner-inicial-blog">
        <h1>Blog</h1>
    </section>


    <section class="conteiner-destaque">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/equipe-dev.jpeg" alt="imagem">
        <div class="descricao-destaque">
            <h3 class="fw-bold">Conheça a atual equipe de desenvolvimento do LearningLab</h3>
            <p>Saiba quem trabalha no setor e os projetos concluídos e em andamento</p>
            <a <?php if(is_page('equipe-desenvolvimento-learninglab') == true ) { echo 'ativo';} ?>" aria-current="equipe-desenvolvimento-learninglab" href="<?php echo get_home_url(); ?>/equipe-desenvolvimento-learninglab"><button>Ver mais</button></a>
        </div>
    </section>

    <section class="conteiner-conteudos">
        <div class="painel-blogs">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/novaidentidade.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3 class="fw-bold">O fim ou uma nova fase?</h3>
                <p>Conheça a nova identidade visual do projeto LearningLab</p>
            </div>
            <a href="https://www.instagram.com/p/CkLmNgbp_Am/" target="_blank"><button>Ver mais</button></a>

        </div>


        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/novascoresid.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3 class="fw-bold">A nova fase do LearningLab</h3>
                <p>Estamos de cara nova!!!! 🥳😍🥰

                 Iniciamos uma nova fase por aqui, vocês estão preparad@s?</p>
               
            </div>
            <a href="https://www.instagram.com/p/CkOK4OouSKv/" target="_blank"><button>Ver mais</button></a>
        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/ep1.jpeg" alt="imagem">
            <div class="descricao-conteudo">
                <h3 class="fw-bold">Conheça nossa vila learniana</h3>
                <p>Agora vamos iniciar uma nova série, venha conhecer a vila learnina.</p>
            </div>
            <a href="https://www.instagram.com/reel/CkPI7i4JvHf/?utm_source=ig_web_copy_link" target="_blank"><button>Ver mais</button></a>

        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/siteeu.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3 class="fw-bold">Conheça o novo site do EU</h3>
                <p>Você sabia que os Encontros Universitários tem um novo site e que foi desenvolvido pelos membros do projeto LearningLab?👀
                </p>
            </div>
            <a href="http://200.129.62.41/encontros/" target="_blank"><button>Ver mais</button></a>

        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/premio.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3>LearningLab é indicado ao Top Awards e vence em 4 categorias.</h3>
                <p>Ficamos muito felizes em anunciar que fomos indicados a 4 categorias do prêmio TOP AWARDS 🥳🥳</p>
            </div>
            <a href="https://www.instagram.com/p/CYtihdcOeAi/" target="_blank"><button>Ver mais</button></a>
        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/cursoFigma.jpeg" alt="imagem">
            <div class="descricao-conteudo">
                <h3>Momentos do nosso primeiro curso presencial: Figma para iniciantes</h3>
                <p>
                O Figmatizando ideias 2.0 vem aí e em breve muitas novidades!</p>
            </div>
            <a href="https://www.instagram.com/p/Cfc0tkQuD-1/" target="_blank"><button>Ver mais</button></a>
        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img6.jpg" alt="imagem">
            <div class="descricao-conteudo">
                <h3>Cursos gratuitos e pagos oferecem formação para quem quer trabalhar com tecnologia</h3>
                <p>Há chances para quem deseja entrar no mercado de trabalho.</p>
            </div>
            <a href="https://g1.globo.com/tecnologia/noticia/2022/05/25/cursos-gratuitos-e-pagos-oferecem-formacao-para-quem-quer-trabalhar-com-tecnologia.ghtml" target="_blank"><button>Ler mais</button></a>

        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/computer.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3>Computer on The Beach</h3>
                <p>Campus da Ufc de Russas participa do Computer on The Beach.</p>
            </div>
            <a <?php if(is_page('noticiaComputerOnTheBeach') == true ) { echo 'ativo';} ?>" aria-current="noticiaComputerOnTheBeach" href="<?php echo get_home_url(); ?>/noticiaComputerOnTheBeach"><button>Ler mais</button></a>

        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/chatgpt.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3>ChatGPT</h3>
                <p>O que é o Chat GPT e como usá-lo no dia a dia.</p>
            </div>
            <a <?php if(is_page('noticiachatgpt') == true ) { echo 'ativo';} ?>" aria-current="noticiachatgpt" href="<?php echo get_home_url(); ?>/noticiachatgpt"><button>Ler mais</button></a>

        </div>
        <div class="painel-blogs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imglogo.png" alt="imagem">
            <div class="descricao-conteudo">
                <h3>StudyUFC</h3>
                <p>Alunos do projeto Learning Lab, criam sistema para ajudar outros alunos</p>
            </div>
            <a <?php if(is_page('noticiastudyufc') == true ) { echo 'ativo';} ?>" aria-current="noticiastudyufc" href="<?php echo get_home_url(); ?>/noticiastudyufc"><button>Ver mais</button></a>

        </div>


    </section>

    <?php get_footer(); ?>