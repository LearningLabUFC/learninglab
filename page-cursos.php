<?php get_header(); ?>

<body>    
    <div class="container-titulo">
        <div class="texto">
        <h1>Conheça nossos cursos</h1>
        </div>
    </div>
    <div class="conteudo">
        <p>Um dos setores de maior destaque no LearningLab é o de cursos. Ao longo da nossa história, já ministramos 7 cursos e impactamos mais de 150 estudantes com eles — 130 deles sendo certificados.</p>
        <p>Nessa página, você pode conferir todos os cursos já ministrados pelo LearningLab, bem como os que ainda estão por vir.</p>
    </div>

    <div class="conteudo">

        <h2>Cursos futuros</h2>

        <div class="container-cursos">
            <div class="curso curso-futuro">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img1.jpg" alt="Imagem curso React">
                <div class="texto">
                    <h1>React Native 2.0</h1>
                    <p>Após o sucesso do primeiro curso, estão abertas as inscrições para o "React Descomplicado: Fundamentos do Front-End Moderno", o qual abordará de maneira dinâmica e prática o universo da programação com a tecnologia.</p>
                    <div class="inscricao"><a href="https://forms.gle/WAPjAFG355ik9xpAA" target="_blank">Inscreva-se</a></div>
                </div>
            </div>
            <div class="curso curso-futuro">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/latex.jpeg" alt="Imagem curso web">
                <div class="texto">
                    <h1>LaTex</h1>
                    <p>O LaTeX é um sistema de composição tipográfica de qualidade, que inclui recursos destinados à produção de documentos técnicos e científicos. O curso tem como objetivo a utilização e estruturação de recursos em documentos reais. </p>
                </div>
            </div>
            <div class="curso curso-futuro">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/teste.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>Teste de software</h1>
                    <p>O curso de teste de software consistirá na prática de ensinar desde o planejamento até a execução de casos de testes. Ademais, será utilizado um projeto real para simular uma completa cobertura de qualidade para o software. </p>
                </div>
            </div>
        </div>

        <h2>Cursos encerrados</h2>

        <div class="container-cursos">
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-web.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>Código limpo</h1>
                    <p>Codsmells? Aqui não! Limpando e refatorando códigos na prática. O curso de refatoração tem como objetivo as boas práticas de programação. A abordagem consistiu em modificar um código “sujo” e refatorar ao ponto de ficar bem estruturado e legível. </p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img3.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>HTML5 e CSS3</h1>
                    <p>Codificando ideias: HTML e CSS na prática. É um curso básico voltado para iniciantes, o objetivo do curso foi abordar todos os elementos básicos que são vistos tanto no HTML quanto no CSS! No final, os alunos conseguiram estruturar bem um site e montar uma landing page. </p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img1.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>React Native</h1>
                    <p>React Native é um curso introdutório, no qual o ensino deu-se desde a apresentação do framework até a criação de um projeto real no qual refletia em um aplicativo apresentando o  LearningLab para o usuários.</p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img9.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>Figmatizando ideias</h1>
                    <p>Figmatizando ideias: figma para iniciantes! É um curso básico para iniciantes, no qual os alunos puderam mexer no figma, com o objetivo de criar um protótipo real para um sistema web responsivo para mobile! Ao final do curso, os alunos conseguiram adquirir o conhecimento de criação de protótipos.</p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/scrum.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>SCRUM na prática</h1>
                    <p>O curso de Scrum 2.0 é um curso com o objetivo de mostrar na prática como é o Scrum e como implementar dentro da organização no qual o aluno faz parte, sendo um curso com a ministração da segunda versão. Explica desde a parte teórica até as cerimônias, trazendo dinâmicas que possam fixar o conhecimento, abordando de forma profunda o Scrum.</p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img5.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>GIT e Github</h1>
                    <p>Git e GitHub na prática é um curso básico com o objetivo de mostrar na prática os comandos existentes e como utilizá-los em um projeto real</p>
                </div>
            </div>
            <div class="curso curso-encerrado">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flutter.jpg" alt="Imagem curso web">
                <div class="texto">
                    <h1>Flutter</h1>
                    <p>Flutterama: Descomplicando a programação em Flutter! Flutter é um kit de desenvolvimento de interface de usuário, de código aberto. O curso ministrado pelo desenvolvedor Gabriel Nogueira tem como objetivo a introdução do flutter e o desenvolvimento utilizando informações reais para o projeto real.</p>
                </div>
            </div>
        </div>
    </div>
</body>


<?php get_footer(); ?>