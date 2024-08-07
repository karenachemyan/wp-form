<?php
// Adding settings page to admin menu
function w_form_add_settings_page() {
    add_menu_page(
        'W-Form Settings',
        'W-Form',
        'manage_options',
        'w-form-settings',
        'w_form_render_settings_page',
        'dashicons-admin-generic',
        20
    );
}
add_action('admin_menu', 'w_form_add_settings_page');

function w_form_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>W-Form Plugin Settings</h1>
        <p>Use the shortcode below to display the form on any page or post:</p>
        <pre><code>[w_form]</code></pre>
    </div>
    <?php
}
?>