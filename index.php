<?php get_header(); ?>

<main>
        <section class="background-conteiner-incial">
            <div class="conteiner-inicial">
                <h2>Instigando sempre sua criatividade e inovação</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-painel-index.svg" alt="imagem com curiosidades">
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
                        <p>O curso de Scrum 2.0 é um curso com o objetivo de mostrar na prática como é o Scrum e como implementar dentro da organização no qual o aluno faz parte, sendo um curso com a ministração da segunda versão. </p>
                        <a href=""></a><button disabled>Em breve</button></a>
                    </div>
                </div>
                <div class="painel-curso">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-scrum.svg" alt="Imagem curso SCRUM">
                    <div class="painel-descricao">
                        <h3>Curso de Latex</h3>
                        <p>O LaTeX é um sistema de composição tipográfica de qualidade, que inclui recursos destinados à produção de documentos técnicos e científicos. O curso tem como objetivo a utilização e estruturação de recursos em documentos reais. 

</p>
                        <a href=""><button disabled>Em breve</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="conteiner-comentarios">
             <h2>O que comentam sobre nós <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/coracao.jpg" alt="imagem coração"></h2>
            
            <div class="comentarios">
                <div>
                    <p>Achei bem interessante, me abriu mais a mente em relação ao assunto, assim como o interesse, e conseguir abstrair bastante conteúdo, seria massa um 2.0 desse curso</p>
                    <figure>
                        <figcaption>Davi Gomes</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Olá, o curso foi ótimo e acho que fiz bom proveito de todo o conteúdo dado, pena que os dispositivos do laboratório não cooperaram, mas foi muito bom na medida do possível. Foi ótimo quando implenebtram a ferramenta web

                    </p>
                    <figure>
                        <figcaption>Ruan Pablo</figcaption>
                    </figure>
               
                 </div>
                <div>
                    <p>O curso é ótimo, sempre é bom está aprimorando os conhecimentos, conhecendo novas tecnologias, nesses 5 dias me fez entender melhor como o flutter e o dart trabalham no mercado das tecnologias. </p>
                    <figure>
                        <figcaption>Rayan Victor</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>O curso foi excelente, o professor tem grande conhecimento e didática, além das aulas serem super práticas e direto ao ponto.</p>
                    <figure>
                        <figcaption>Wesley Jonatha</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Gostei muito da espontaneidade dos professores, da suas disáticas e principalmente do aprendizado que eu obtive.</p>
                    <figure>
                        <figcaption>Antonio Kawn</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>O curso me mostrou uma tecnologia muita utilizada no mercado, como ela funciona e o seu resultado.</p>
                    <figure>
                        <figcaption>Arthur Levi</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Eu achei o curso ótimo, aprendi demais com todos os alunos que dirigiram as aulas, com diversas formas de apresentar o conteúdo. O projeto final foi essencial pra colocar tudo que vimos no curso em prática. Obrigada a todos os envolvidos e que vocês possam ir longe com o projeto.</p>
                    <figure>
                        <figcaption>Nathalya Cardoso</figcaption>
                    </figure>
               
                </div>
                <div>
                    <p>Curti demais, achei sensacional, não só a parte das explicações, mas também a ajuda que era dada para quem estivesse com alguma dificuldade. Todos que explicaram, conseguiram transmitir bem o conteúdo e foi muito bom os últimos dois dias, por colocar em prática tudo que nos foi ensinado. Boa sorte para a equipe, vocês são feras!!!</p>
                    <figure>
                        <figcaption>Pedro Henrique</figcaption>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/novascoresid.png" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>O fim ou uma nova fase?</h3>
                        <p>Conheça a nova identidade visual do projeto LearningLab</p>
                        <a href="https://www.instagram.com/p/CkOK4OouSKv/" target="_blank"><button> Ler mais</button></a>
                    </div>
                </div>
                    <div class="painel-leitura">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/ep1.jpeg" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>Conheça nossa vila learniana</h3>
                        <p>Agora vamos iniciar uma nova série, venha conhecer a vila learnina.</p>
                        <a href="https://www.instagram.com/reel/CkPI7i4JvHf/?utm_source=ig_web_copy_link" target="_blank"><button>Ler mais </button></a>
                    </div>
                </div>
                <div class="painel-leitura" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/siteeu.png" alt="imagem">
                    <div class="descricao-leitura">
                        <h3>Conheça o novo site do EU</h3>
                        <p>Você sabia que os Encontros Universitários tem um novo site e que foi desenvolvido pelos membros do projeto LearningLab?👀</p>
                        <a href="http://200.129.62.41/encontros/" target="_blank"><button>Ler mais </button></a>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php get_footer(); ?>
    