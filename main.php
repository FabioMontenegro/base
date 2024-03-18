<?php

/**
 * Plugin Name: Base para plugin WordPress
 * Plugin URI: https://fabiomontenegro.com
 * Description: Plugin para agregar funciones complementarias
 * Version: 1.0
 * Author: Fabio Montenegro
 * Author URI: https://fabiomontenegro.com
 */

// Se incluye archivos de funcionalidades

define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_DIR_URL', plugin_dir_url(__FILE__));

function cargar_recursos_personalizados()
{
    // Estilos propios o de terceros (para este ejemplo Select2)
    wp_enqueue_style('estilos-personalizados', PLUGIN_DIR_URL . 'css/styles.css');
    wp_enqueue_style('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), '4.1.0-rc.0');

    // Scripts propios o de terceros (para este ejemplo Select2)
    wp_enqueue_script('jquery');
    wp_enqueue_script('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery'), '4.1.0-rc.0', true);
    wp_enqueue_script('main', PLUGIN_DIR_URL . 'scripts/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'cargar_recursos_personalizados');

// Incluye otros archivos PHP
require_once PLUGIN_DIR_PATH . 'includes/shortcodes.php';
require_once PLUGIN_DIR_PATH . 'includes/functions.php';

