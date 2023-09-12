<?php
/*
Plugin Name: Plugin
Description: Affichage les réseaux sociaux
*/

require_once(plugin_dir_path(__FILE__) . 'includes/plugin-function.php');


// FOR A MENU LINK //

function ajouter_menu_reseaux_sociaux() {
    add_menu_page(
        'Gérer les Réseaux Sociaux',
        'Plugin',
        'manage_options',
        'gestion-reseaux-sociaux',
        'page_gestion_reseaux_sociaux'
    );
}

add_action('admin_menu', 'ajouter_menu_reseaux_sociaux');


function afficher_icones_dans_footer() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'reseaux_sociaux';

    
    $icones = $wpdb->get_results("SELECT `icone_reseau_sociaux` FROM $table_name");

    if ($icones) {
        echo '<div class="footer-icons">';
        foreach ($icones as $icone) {
            // var_dump($icone->icone_reseau_sociaux); 
            echo '<i class="' . esc_attr($icone->icone_reseau_sociaux) . '" style="font-size: 24px; color: white;"></i>';

        }
        echo '</div>';
    }
}

add_action('wp_footer', 'afficher_icones_dans_footer');