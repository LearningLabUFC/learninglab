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
                <p>O Laboratório de Ensino, Pesquisa, Extensão e Desenvolvimento de Tecnologias Alinhadas à Gestão do Conhecimento e Inovação em Processos de Software (<strong>LearningLab</strong>) é um projeto da Universidade Federal do Ceará (UFC) em Russas que propõe metodologias para a permanência e garantia da conclusão dos estudantes de graduação em seus respectivos cursos por meio de atividades como cursos práticos, palestras, pesquisas, tutorias e acompanhamentos entre discentes e colaboradores, divulgação de técnicas de gestão do conhecimento utilizadas no mercado, encontros entre discentes, divulgação de vagas de tecnologia, promoção de metodologias ágeis e tendências do mercado.</p>
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
                
                <!-- <div class="painel-curso">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img1.jpg" alt="Imagem curso de React">
                    <div class="painel-descricao">
                        <h3>React Native 2.0</h3>
                        <p>Após o sucesso do primeiro curso, estão abertas as inscrições para o "React Descomplicado: Fundamentos do Front-End Moderno", o qual abordará de maneira dinâmica e prática o universo da programação com a tecnologia. </p>
                        <div class="inscricao"><a href="https://forms.gle/WAPjAFG355ik9xpAA" target="_blank">Inscreva-se</a></div>
                    </div>
                </div> -->
                <div class="painel-curso">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/latex.jpeg" alt="Imagem curso web">
                    <div class="painel-descricao">
                        <h3>Curso de LaTex</h3>
                        <p>O LaTeX é um sistema de composição tipográfica de qualidade, que inclui recursos destinados à produção de documentos técnicos e científicos. O curso tem como objetivo a utilização e estruturação de recursos em documentos reais.</p>
                        <div class="em-breve">Em breve</a></div>
                    </div>
                </div>
                <div class="painel-curso">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/teste.jpg" alt="Imagem curso web">
                    <div class="painel-descricao">
                        <h3>Teste de software</h3>
                        <p>O curso de teste de software consistirá na prática de ensinar desde o planejamento até a execução de casos de testes. Ademais, será utilizado um projeto real para simular uma completa cobertura de qualidade para o software.</p>
                        <div class="em-breve">Em breve</a></div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="conteiner-comentarios" >
             <h2>O que comentam sobre nós <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/coracao.jpg" alt="imagem coração"></h2>
            <div id="carouselExampleIndicators" class="carousel slide">
                 <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>

                </div>
                <div class="comentarios" class="carousel-inner">
                    <div class="carousel-item active" >
                    
                        <p>Achei bem interessante, me abriu mais a mente em relação ao assunto, assim como o interesse, e conseguir abstrair bastante conteúdo, seria massa um 2.0 desse curso</p>
                        <figure>
                            <figcaption>Davi Gomes</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>Olá, o curso foi ótimo e acho que fiz bom proveito de todo o conteúdo dado, pena que os dispositivos do laboratório não cooperaram, mas foi muito bom na medida do possível. Foi ótimo quando implenebtram a ferramenta web</p>
                        <figure>
                            <figcaption>Ruan Pablo</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>O curso é ótimo, sempre é bom está aprimorando os conhecimentos, conhecendo novas tecnologias, nesses 5 dias me fez entender melhor como o flutter e o dart trabalham no mercado das tecnologias. </p>
                        <figure>
                            <figcaption>Rayan Victor</figcaption>
                        </figure>
                    
                    </div> 
                    <div class="carousel-item" >
                    
                        <p>O curso foi excelente, o professor tem grande conhecimento e didática, além das aulas serem super práticas e direto ao ponto.</p>
                        <figure>
                            <figcaption>Wesley Jonatha</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>Gostei muito da espontaneidade dos professores, da suas disáticas e principalmente do aprendizado que eu obtive.</p>
                        <figure>
                            <figcaption>Antonio Kawn</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>O curso me mostrou uma tecnologia muita utilizada no mercado, como ela funciona e o seu resultado.</p>
                        <figure>
                            <figcaption>Arthur Levi</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>Eu achei o curso ótimo, aprendi demais com todos os alunos que dirigiram as aulas, com diversas formas de apresentar o conteúdo. O projeto final foi essencial pra colocar tudo que vimos no curso em prática. Obrigada a todos os envolvidos e que vocês possam ir longe com o projeto.</p>
                        <figure>
                            <figcaption>Nathalya Cardoso</figcaption>
                        </figure>
                    
                    </div>
                    <div class="carousel-item" >
                    
                        <p>Curti demais, achei sensacional, não só a parte das explicações, mas também a ajuda que era dada para quem estivesse com alguma dificuldade. Todos que explicaram, conseguiram transmitir bem o conteúdo e foi muito bom os últimos dois dias, por colocar em prática tudo que nos foi ensinado. Boa sorte para a equipe, vocês são feras!!!</p>
                        <figure>
                            <figcaption>Pedro Henrique</figcaption>
                        </figure>
                    
                    </div>
            
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </section>

    
        <section class="conteiner-leitura">
            <div class="background-conteier-leitura"></div>
            <div class="quadro-de-letura">
                <div class="mais-noticias">
                <h2>Para leitura</h2>
                <button><a <?php if(is_page('home') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/blog"> Ler mais notícias </a></button>
            </div>
            <div class="swiper">
                <div class="slide-content">
                    <div  class=" card-wrapper swiper-wrapper">
                        <div class="card-noticia swiper-slide" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/eriky-sbsc.jpeg">
                        <div class="descricao-noticia">
                                <h3>Conheça os eventos científicos nos quais o LearningLab já marcou presença</h3>
                                <p>Veja também quais trabalhos foram apresentados em cada um deles</p>
                                <a <?php if(is_page('eventos') == true ) { echo 'ativo';} ?>" aria-current="eventos" href="<?php echo get_home_url(); ?>/eventos"><button>Ler mais</button></a>
                            </div>
                        </div>
                        <div class="card-noticia swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/pesquisa.jpeg" alt="imagem">
                            <div class="descricao-noticia">
                                <h3>Conheça mais sobre os artigos do LearningLab já aceitos e publicados</h3>
                                <p>Veja também quem são os autores responsáveis por cada um deles</p>
                                <a <?php if(is_page('artigos') == true ) { echo 'ativo';} ?>" aria-current="artigos" href="<?php echo get_home_url(); ?>/artigos"><button>Ler mais</button></a>
                            </div>
                        </div>
                        <div class="card-noticia swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/llgirls.png" alt="imagem">
                            <div class="descricao-noticia">
                                <h3>LLGirls: programa incentiva a participação feminina no LearningLab</h3>
                                <p>Conheça o programa e saiba como se inscrever para fazer parte do LLGirls</p>
                                <a <?php if(is_page('llgirls') == true ) { echo 'ativo';} ?>" aria-current="llgirls" href="<?php echo get_home_url(); ?>/llgirls"><button>Ler mais</button></a>
                            </div>
                        </div>

                        <div class="card-noticia swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/equipe-dev.jpeg" alt="imagem">
                            <div class="descricao-noticia">
                                <h3>Conheça a atual equipe de desenvolvimento do LearningLab</h3>
                                <p>Saiba quem trabalha no setor e os projetos concluídos e em andamento</p>
                                <a <?php if(is_page('equipe-desenvolvimento-learninglab') == true ) { echo 'equipe-desenvolvimento-learninglab';} ?>" aria-current="equipe-desenvolvimento-learninglab" href="<?php echo get_home_url(); ?>/equipe-desenvolvimento-learninglab"><button>Ler mais</button></a>
                            </div>
                        </div>
                        <div class="card-noticia swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/ep1.jpeg" alt="imagem">
                            <div class="descricao-noticia">
                                <h3>Conheça nossa vila learniana</h3>
                                <p>Agora vamos iniciar uma nova série, venha conhecer a vila learnina.</p>
                                <a href="https://www.instagram.com/reel/CkPI7i4JvHf/?utm_source=ig_web_copy_link" target="_blank"><button>Ler mais </button></a>
                            </div>
                        </div>

                    </div>
            
                    <div class="swiper-button-next swiper-navBtn"></div>
                     <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>            
                </div>
            </div>
        </section>

</main>

<?php get_footer(); ?>
    