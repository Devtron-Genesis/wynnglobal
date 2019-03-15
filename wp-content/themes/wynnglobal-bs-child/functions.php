<?php
/**
 * Never worry about cache again!
 */
function my_load_scripts($hook) {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'custom_js', '/wp-content/themes/wynnglobal-bs-child/js/script.js'); 
}
add_action('wp_enqueue_scripts', 'my_load_scripts', 50);

function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => 'Breadcrumb',
        'id'            => 'bread-crumb',
        'before_widget' => '<div class="breadcrumb-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="breadcrumb-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
