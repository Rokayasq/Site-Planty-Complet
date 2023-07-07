<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
} 
?>

<?php if(is_user_logged_in()) :
    add_filter('wp_nav_menu_items', function($items, $args) {
    if ($args->theme_location == 'primary' || $args->theme_location == 'mobile_menu') {
            $items .= '<li class="menu-item"><a class="menu-link" target="_blank" href="' . admin_url() . '">Admin</a></li>';
        }
        return $items;
    }, 10, 2); 
endif; ?>

<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// Pour que "Nous rencentrer" garde le hover
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'menu_active ';
  }
  return $classes;
}
