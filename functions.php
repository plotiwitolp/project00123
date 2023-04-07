<?php

add_action('wp_enqueue_scripts', function () {
    $version = '1.0';

    // start styles
    wp_enqueue_style('font-Montserrat', "https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap", [], $version);
    wp_enqueue_style('style', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/main.css', [], $version);
    // end styles

    // start scripts
    wp_enqueue_script('jquery', false, [], false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/scripts/main.js', ['jquery'], $version, true);
    // end scripts
});


// start регистрация меню
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('primary', 'Главное меню');
}
// end регистрация меню

// start для поддержки изображений в постах
add_theme_support('post-thumbnails');
// end для поддержки изображений в постах

// start отключить автоизменение ковычек в стандартном редакторе 
add_filter('run_wptexturize', '__return_false');
// end отключить автоизменение ковычек в стандартном редакторе 


// start хлебные крошки
function wpcourses_breadcrumb($sep = ' > ')
{
    global $post;
    $out = '';
    $out .= '<div class="wpcourses-breadcrumbs">';
    $out .= '<a href="' . home_url('/') . '">Главная</a>';
    $out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';
    if (is_single()) {
        $terms = get_the_terms($post, 'category');
        if (is_array($terms) && $terms !== array()) {
            $out .= '<a href="' . get_term_link($terms[0]) . '">' . $terms[0]->name . '</a>';
            $out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';
        }
    }
    if (is_singular()) {
        $out .= '<span class="wpcourses-breadcrumbs-last">' . get_the_title() . '</span>';
    }
    if (is_search()) {
        $out .= get_search_query();
    }
    $out .= '</div><!--.wpcourses-breadcrumbs-->';
    return $out;
}
// end хлебные крошки


function mytheme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'mytheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');
