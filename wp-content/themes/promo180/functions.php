<?php 
if ( ! function_exists( 'mytheme_options' ) ) {

function mytheme_options(){
    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'main_menu' => __( 'Primary Menu', 'text_domain' ),
        //ficher de traduction  
    ) );
}
add_action( 'after_setup_theme', 'mytheme_options', 0 );
}

if ( ! function_exists( 'custom_post_type' ) ) {
    function custom_post_type() {
        register_post_type('stagiaire',
            array(
                'labels'      => array(
                    'name'          =>__ ('Stagiaires', 'textdomain'),
                    'singular_name' =>__ ('Stagiaire', 'textdomain'),
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'menu_position' => 5,
                    'menu_icon'   => 'dashicons-groups',
                    'show_in_rest' => true,
                    'supports'    => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt',
                        'custom-fields',
                        'comments',
                        'revisions',
                        'author',
                        'page-attributes',
                        'post-formats',
                    ),
            )
           
        );
    }
    add_action('init', 'custom_post_type');
    }

    if ( ! function_exists( 'widget_registration' ) ) {
        function widget_registration() {
            register_sidebar(array( 
                'name' => 'Footer1',
                'id' => 'footer 1',
                'befor_widget' => '<div class="footer-widget">',
                'after_widget' => '</div>',
                'befor_title' => '<h3 class="footer-title">',
                'after_title' => '</h3>',
            )
            );
        }
        add_action('widgets_init', 'widget_registration');
    }

   