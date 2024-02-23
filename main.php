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

require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'includes/smart-filter-break-by-month.php';

function cargar_estilos_personalizados() {
    wp_enqueue_style('estilos-personalizados', plugin_dir_url(__FILE__) . 'css/styles.css');    
}
add_action('wp_enqueue_scripts', 'cargar_estilos_personalizados');

function cargar_js() {
    wp_enqueue_script( 'main', plugin_dir_url( __FILE__ ) . 'scripts/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cargar_js' );

