<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }

    // Activate WordPress Maintenance Mode
    function wp_maintenance_mode(){
        $maintenance = of_get_option('page_checkbox', 'no_entry');
        if($maintenance == 1 ) {
            if(!current_user_can('edit_themes') || !is_user_logged_in()){
                wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance. We will be back online shortly!');
            }
        }
    }
    add_action('get_header', 'wp_maintenance_mode');
?>
