<?php 
    // Função para configurar o tema
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');

    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/styles/style.css', array(),'1.0.0', 'all');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css', array(),'1.0.0', 'all');
        wp_enqueue_style('header', get_template_directory_uri().'/assets/styles/header.css', array(),'1.0.0', 'all');
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');



            if(is_front_page() == true) {
                wp_enqueue_style('home', get_template_directory_uri() . '/assets/styles/style.css', array(),'1.0.0', 'all');
             }

            if ( is_page('sobre') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('sobre', get_template_directory_uri() . '/assets/styles/sobre.css');
            }
         
            if ( is_page('contato') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('contato', get_template_directory_uri() . '/assets/styles/contato.css');
            }

            if ( is_page('blog') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('blog', get_template_directory_uri() . '/assets/styles/blog.css');
            }

            if ( is_page('cursos') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('cursos', get_template_directory_uri() . '/assets/styles/cursos.css');
            }

            if ( is_page('gameficacao') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('gameficacao', get_template_directory_uri() . '/assets/styles/gameficacao.css');
            }

            if ( is_page('gameficacao-intensivao') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('gameficacao-intensivao', get_template_directory_uri() . '/assets/styles/gameficacao.css');
            }

            if ( is_page('gameficacao-eep') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('gameficacao-eep', get_template_directory_uri() . '/assets/styles/gameficacao.css');
            }

            if ( is_page('gameficacao-sescomp') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('gameficacao-sescomp', get_template_directory_uri() . '/assets/styles/gameficacao.css');
            }
            
            if ( is_page('equipe-desenvolvimento-learninglab') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('equipe-desenvolvimento-learninglab', get_template_directory_uri() . '/assets/styles/equipe-desenvolvimento-learninglab.css');
            }

            if ( is_page('llgirls') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('llgirls', get_template_directory_uri() . '/assets/styles/llgirls.css');
            }

            if ( is_page('membros') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('membros', get_template_directory_uri() . '/assets/styles/membros.css');
            }

            if ( is_page('artigos') == true ) {
                // só vai carregar se estiver na pag sobre
                wp_enqueue_style('artigos', get_template_directory_uri() . '/assets/styles/artigos.css');
            }

    }

  
    



    add_action('wp_enqueue_scripts', 'css_files');

    function scripts_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
        wp_enqueue_script('swiper','https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
        wp_enqueue_script('script', get_template_directory_uri() .'/assets/js/script.js', array('swiper'), null, true);

        


    }
    add_action('wp_enqueue_scripts', 'scripts_files');  
    add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_filter( 'wpcf7_validate_configuration', '__return_false' );

?>