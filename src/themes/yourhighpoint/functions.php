<?php
/* Require Includes */
include_once get_template_directory().'/includes/gutenburg.php';
include_once get_template_directory().'/includes/helper-functions.php';
include_once get_template_directory().'/includes/bootstrap-wp-navwalker.php';
//include_once get_template_directory().'/includes/acf-custom-widget.php';

/* Hooks */
if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    // Cache bust constants
    define('THEMESTYLE_VERSION', filemtime(get_stylesheet_directory().'/style/style.css'));
    define('HEADERBUNDLE_VERSION', filemtime(get_stylesheet_directory().'/js/header-bundle.js'));
    define('FOOTERBUNDLE_VERSION', filemtime(get_stylesheet_directory().'/js/footer-bundle.js'));

    function enqueue_scripts()
    {
        // Register our own jquery
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');

        wp_enqueue_style('style_file', get_stylesheet_directory_uri().'/style/style.css', [], THEMESTYLE_VERSION);
        wp_enqueue_script('header_js', get_stylesheet_directory_uri().'/js/header-bundle.js', null, HEADERBUNDLE_VERSION, false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri().'/js/footer-bundle.js', null, FOOTERBUNDLE_VERSION, true);
    }
}

if (!function_exists('custom_after_setup_theme')) {

    add_action('after_setup_theme', 'custom_after_setup_theme', 11);



    function custom_after_setup_theme()
    {
        remove_theme_support('custom-background');
        remove_theme_support('post-thumbnails');

        register_nav_menus([
            'primary' => 'Primary Menu',
            'secondary' => 'Footer Menu',
            'tertiary' => 'Legal Menu'
        ]);

        // Style Gutenberg
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');

        // Enable wide alignment for Gutenberg
        add_theme_support( 'align-wide' );

        // Remove custom font-sizing in backend Gutenberg
        add_theme_support( 'disable-custom-font-sizes' );

        // Custom editor font-sizes
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name'      => __( 'small', 'sproing' ),
                'shortName' => __( 'S', 'sproing' ),
                'size'      => 12,
                'slug'      => 'small'
            ),
            array(
                'name'      => __( 'regular', 'sproing' ),
                'shortName' => __( 'M', 'sproing' ),
                'size'      => 16,
                'slug'      => 'regular'
            ),
            array(
                'name'      => __( 'large', 'sproing' ),
                'shortName' => __( 'L', 'sproing' ),
                'size'      => 20,
                'slug'      => 'large'
            ),
            array(
                'name'      => __( 'larger', 'sproing' ),
                'shortName' => __( 'XL', 'sproing' ),
                'size'      => 24,
                'slug'      => 'larger'
            )
        ) );

    }
}
// Renaming Post in Sidebar
function spr_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog';
    $submenu['edit.php'][10][0] = 'Add Blog';
    $submenu['edit.php'][16][0] = 'Blog Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog';
    $labels->singular_name = 'Blog';
    $labels->add_new = 'Add Blog';
    $labels->add_new_item = 'Add Blog';
    $labels->edit_item = 'Edit Blog';
    $labels->new_item = 'Blog';
    $labels->view_item = 'View Blog';
    $labels->search_items = 'Search Blog';
    $labels->not_found = 'No Blog found';
    $labels->not_found_in_trash = 'No Blog found in Trash';
    $labels->all_items = 'All Blog';
    $labels->menu_name = 'Blog';
    $labels->name_admin_bar = 'Blog';
}

add_action( 'admin_menu', 'spr_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

/* Misc */
show_admin_bar(false);
remove_action('wp_head', 'wp_generator');
add_filter('login_errors', create_function('$a', "return null;"));
add_filter('allow_dev_auto_core_updates', '__return_false');
add_filter('auto_update_plugin', '__return_true');

/* Gravity Forms */
add_filter('gform_init_scripts_footer', '__return_true');
add_filter('gform_confirmation_anchor', '__return_false');
//add_filter('gform_enable_field_label_visibility_settings', '__return_true');

/* ACF - Theme Options */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'position' => 80,
        'redirect' => false
    ]);
}