<?php
// Enqueue styles and scripts
function w_form_enqueue_scripts() {
    wp_enqueue_style('w-form-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('w-form-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), null);
    wp_enqueue_style('w-form-styles', plugins_url('assets/styles/style.css', __FILE__));

    wp_enqueue_script('w-form-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('w-form-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('w-form-popper'), null, true);
    wp_enqueue_script('w-form-script', plugins_url('assets/scripts/script.js', __FILE__), array(), null, true);
}
add_action('wp_enqueue_scripts', 'w_form_enqueue_scripts');
?>