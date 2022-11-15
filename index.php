<?php get_header(); ?>

<main>
        <section class="background-conteiner-incial">
            <div class="conteiner-inicial">
                <h2>Instigando sempre sua criatividade e inovação</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imag2.svg" alt="imagem com curiosidades">
            </div>    
        </section>
    
        <section id="circulo"> </section>

        <section class="conteiner-sobre">
            <div>
                <h2>Sobre o projeto</h2>
                <p>O projeto LearningLab (Laboratório de Ensino e Pesquisa de Tecnologias alinhadas à Gestão do Conhecimento e Inovação em Processos de Software) propõe metodologias para a permanência de alunos nos cursos de Computação e garantia da conclusão dos cursos pelos alunos de graduação através de realizações de cursos e tutorias, divulgação de técnicas de gestão do conhecimento utilizadas no mercado, incentivo a participação de eventos de computação, dentre outros.
                </p>
                <a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/sobre">Conhecer mais</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-sobre-projeto.svg" alt="Foto curso figma">
        </section>

        <section class="conteiner-cursos">
            <div class="background-conteiner-cursos"></div>
            <div class="paineis-de-cursos">
                <div class="mais-cursos">
                    <h2>Nossos Cursos</h2>
                    <a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/cursos"><button>Ver mais cursos</button></a>
                </div>
                
                <div class="painel-curso">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-web.svg" alt="Imagem curso web">
                    <div class="painel-descricao">
                        <h3>Curso Scrum 2.0</h3>
                        <p>Descrição do curso aqui, descrição do 
                        curso aqui, descrição do curso aqui, HTML,
                        CSS, JS, etc.</p>
                        <a href=""></a><button disabled>Em breve</button></a>
                    </div>
                </div>
                <div class="painel-curso">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-scrum.svg" alt="Imagem curso SCRUM">
                    <div class="painel-descricao">
                        <h3>Curso de Latex</h3>
                        <p>Descrição do curso aqui, descrição do 
                        curso aqui, descrição do curso aqui, HTML,
                        CSS, JS, etc.</p>
                        <a href=""><button disabled>Em breve</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="conteiner-comentarios">
             <h2>O que comentam sobre nós <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/coracao.jpg" alt="imagem coração"></h2>
            
            <div class="comentarios">
                <div>
                    <p>Eu amei o curso, a organização do projeto é fantasica!</p>
                    <figure>
                        <figcaption>Ana Paula</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>A metodologia do curso foi TUDO! 

                    o projeto merece todo apoio</p>
                    <figure>
                        <figcaption>Flaviana</figcaption>
                    </figure>
               
                 </div>
                <div>
                    <p>A ideia de cursos práticos e
                    gratuitos ganhou o meu coração
                    de estudante</p>
                    <figure>
                        <figcaption>Fernanda Souza</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Gostei do curso que participei, os
                    professores são excelentes </p>
                    <figure>
                        <figcaption>Felipe Branco</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Só tenho a agradecer a equipe
                    que produz esses conteúdos 
                    maravilhosos</p>
                    <figure>
                        <figcaption>José Carlos</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Muito bacana ver conteúdo atuais
                        sendo compartilhados no meio
                        universitário, a minha experiência
                        foi maravilhosa e voltarei parauma próxima turma de curso!</p>
                    <figure>
                        <figcaption>Leandro Lima</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p> Sem palavras, desde da inscrição,
                    até o processo de confirmar a
                    matricula foi tudo perfeito e
                    organizado </p>
                    <figure>
                        <figcaption>Ana Paula</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Experiência incrível, time
                    organizado e divertido!!! </p>
                    <figure>
                        <figcaption>Solane Almeida</figcaption>
                    </figure>
               
                </div>
            
            </div>
        </section>

    
        <section class="conteiner-leitura">
            <div class="background-conteier-leitura"></div>
            <div class="quadro-de-letura">
                <div class="mais-noticias">
                <h2>Para leitura</h2>
                <button><a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/blog"> Ler mais notícias </a></button>
            </div>
            <div class="paineis-leituras">
                <div class="painel-leitura">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/gestãoIdeias.png" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>Programa De Gestão De Ideias</h3>
                        <p>Um empreendedor nem sempre sabe como ser um gestor, mas um time alinhado faz toda a diferença n negócio.</p>
                        <a ><button> Ler mais</button></a>
                    </div>
                </div>
                    <div class="painel-leitura">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/engenharia_de_software.jpg" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>Como é a faculdade de Engenharia de Software?</h3>
                        <p>Durante o curso de engenharia de software, o estudante tem a oportunidade de se aprofundar em técnicas e praticas de...</p>
                        <a href="#"><button>Ler mais </button></a>
                    </div>
                </div>
                <div class="painel-leitura" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/gestao_do _conhecimento.jpg" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>Gestão do conhecimento</h3>
                        <p>Gesão do conhecimento é um conceito bastante amplo, que engloba uma série de ações que as empresas já fazem ou...</p>
                        <a href="#"></a><button>Ler mais </button></a>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php get_footer(); ?>
    