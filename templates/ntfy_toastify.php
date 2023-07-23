<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly      
/**
 * ntfy_toastify function return the toastify notification
 *
 * @return void
 */

function ntfy_toastify($atts) {
    $a = shortcode_atts( array(
        'id' => 'ntfy_toast',
        'message' => 'Thank You for using Ninja Toastify!',
        'button_font_size'=>'14px',
        'button_background'=>'llinear-gradient(to right, rgb(16 44 60), rgb(0, 148, 255))',
        'button_name'=>'try it',
        'button_color'=>'#FFFFFF',
        'button_padding'=>'4px 20px',
        'duration' => 3000,
        'destination_url' => 'https://github.com/iamrealfarhanbd/wp-react-tostify-plugin',
        'newWindow' => "true",
        'close' => "true",
        'gravity' => 'top',
        'position' => 'right',
        'stopOnFocus' => "true",
        'background' => 'linear-gradient(to right, #00b09b, #96c93d)',
        'onClick' => ''
    ), $atts );

    ob_start(); ?>
    <a  id="<?php echo esc_attr($a['id']); ?>" class="button" style="font-size:<?php echo esc_attr($a['button_font_size']); ?>; background: <?php echo esc_attr($a['button_background']); ?> ;padding: <?php echo esc_attr($a['button_padding']); ?>;color: <?php echo esc_attr($a['button_color']); ?>;text-decoration: none;"><?php  echo  esc_attr($a['button_name']) ;?></a>
    <script>
        jQuery("#<?php echo esc_attr($a['id']); ?>").on("click", function() {
            Toastify({
                text: "<?php echo esc_js($a['message']); ?>",
                duration: <?php echo esc_js($a['duration']); ?>,
                destination: "<?php echo esc_js($a['destination_url']); ?>",
                newWindow: <?php echo esc_js($a['newWindow']); ?>,
                close: <?php echo esc_js($a['close']); ?>,
                gravity: "<?php echo esc_js($a['gravity']); ?>",
                position: "<?php echo esc_js($a['position']); ?>",
                stopOnFocus: <?php echo esc_js($a['stopOnFocus']); ?>,
                style: {
                    background: "<?php echo esc_js($a['background']); ?>",
                },
                onClick: function() {
                    <?php echo esc_js($a['onClick']); ?>
                }
            }).showToast();
        });
    </script>
    <?php
    $content = ob_get_clean();
    return $content;
};

/**
 * Generating the shortcode for above function
 *
 * @return void
 */

add_shortcode('ninja_toastify', 'ntfy_toastify');
    

?>