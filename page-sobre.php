<?php get_header(); ?>
<main>
  <section class="container-quem-somos">
    <div class="conteudo">
      <h1>Quem somos</h1>
    </div>
  </section>
  <section class="container-sobre-projeto">
    <div class="conteudo">
      <div class="texto">
        <h2>Sobre o projeto</h2>
        <p>O LearningLab (Laboratório de Ensino e Pesquisa de Tecnologias Alinhadas à Gestão do Conhecimento e Inovação em Processos de Software) tem como objetivo contribuir para o processo de formação dos estudantes dos cursos de Ciência da Computação e Engenharia de Software. </p>
        <br>
        <p>As atividades do LearningLab iniciaram em maio de 2020 com apenas três alunos voluntários juntamente com a coordenadora, Jacilane Rabelo.</p>
      </div>
      <div class="imagem">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/imagem-sobre-projeto.png" alt="imagem sobre o projeto">
      </div>
    </div>
  </section>

  <section class="container-pilares">
    <div class="conteudo">
      <div class="texto">
        <h2> O que fazemos e por que?</h3>
        <p>O LearningLab oferece uma experiência abrangente aos estudantes de computação, por meio de cursos práticos, palestras ministradas por profissionais da área e atuação em áreas como pesquisa e extensão. Internamente, investimos na capacitação dos membros do projeto, incentivando o desenvolvimento de habilidades interpessoais e promovendo a participação em eventos relevantes para o setor.</p>

        <div class="pilares-triplo">
          <div class="pilar">
            <div class="titulo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/missao.png">
              <h1>Missão</h1>
            </div>
            <p>Transformar conhecimento teórico em prático, ajudar, apoiar e incentivar estudantes de computação a entrarem no mercado de trabalho, proporcionando cursos e mentorias para o aumento de desempenho neste âmbito.</p>
          </div>
          <div class="pilar">
            <div class="titulo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/visao.png">
              <h1>Visão</h1>
            </div>           
            <p>A grande missão do projeto LearningLab é ser uma referência de laboratório atingindo um grande público nacional para cada vez mais impactar pessoas da área da tecnologia.</p>
          </div>
          <div class="pilar">
            <div class="titulo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/valores.png">
              <h1>Valores</h1>
            </div>
          <p>O projeto LearningLab tem como principais valores norteadores de sua atuação Gestão do conhecimento, Inovação, Trabalho colaborativo, Capacitação, Responsabilidade e Comprometimento.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="container-resultados">
    <div class="conteudo">
      <div class="texto">
        <h2>Resultados</h2>
        <p>Esses são alguns dos nossos resultados obtidos até agora pelo LearningLab.</p>
      </div>
      <div class="cards">
        <div class="card">+400 pessoas impactadas por nossas palestras</div>
        <div class="card">+360 pessoas certificadas através de palestras</div>
        <div class="card">+7 cursos desenvolvidos</div>
        <div class="card">+150 estudantes impactados por nossos cursos</div>
        <div class="card">+130 estudantes certificados através dos nossos cursos</div>
        <div class="card">+11 artigos escritos</div>
        <div class="card">+7 artigos aprovados e publicados</div>
        <div class="card">+55 pessoas capacitadas em cursos de extensão</div>
      </div>
    </div>
  </section>


  <section class="container-momentos">
    <div class="conteudo">
      <h2>Alguns momentos</h2>
      <div class="cards-momentos">
        <div class="momento">
          <div class="imagem-momento">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/curso-fup.jpg" alt="Imagem momento projeto">
          </div>
          <h1 class="momento-titulo">Curso de FUP</h1>
          <p>Desvendando a programação</p>
        </div>
        <div class="momento">
          <div class="imagem-momento">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/intensivao.jpg" alt="Imagem momento projeto">
          </div>
          <h1 class="momento-titulo">Intensivão</h1>
          <p>Curso de Scrum</p>
        </div>
        <div class="momento">
          <div class="imagem-momento">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/curso-git.png" alt="Imagem momento projeto">
          </div>
          <h1 class="momento-titulo">Curso de Git/GitHub</h1>
          <p>Ampliando soft skills</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>