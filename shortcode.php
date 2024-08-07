<?php
// Shortcode to display the form
function w_form_shortcode()
{
    ob_start();
?>
    <form method="post" onsubmit="submitPayment(event)">
        <?php include(plugin_dir_path(__FILE__) . 'form-steps/form-step1.php'); ?>
        <?php include(plugin_dir_path(__FILE__) . 'form-steps/form-step2.php'); ?>
        <?php include(plugin_dir_path(__FILE__) . 'form-steps/form-step3.php'); ?>
        <?php include(plugin_dir_path(__FILE__) . 'form-steps/form-step4.php'); ?>
    </form>

<?php
    return ob_get_clean();
}
add_shortcode('w_form', 'w_form_shortcode');
?>