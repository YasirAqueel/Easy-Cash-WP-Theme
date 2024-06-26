


<?php
function my_theme_enqueue_styles() {
    // Enqueue the main stylesheet
   // wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // Enqueue the custom stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri().'/style2.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>

<?php
function mytheme_files() { 
    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
    wp_enqueue_style('mytheme_mobile_style', get_theme_file_uri('assets/css/style-starter.css')); 
} 

add_action('wp_enqueue_scripts', 'mytheme_files');
?>