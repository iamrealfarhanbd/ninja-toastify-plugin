<?php

/**
 * wprt_toastify_copied function return the toastify notification and copy the text
 *
 * @return void
 */

function wprt_toastify_copied($atts, $content = null) {
    $a = shortcode_atts( array(
        'id' => 'wprt_toast_copied',
        'message' => 'Text copied!',
        'button_font_size'=>'14px',
        'button_background'=>'linear-gradient(to right, rgb(16 44 60), rgb(0, 148, 255))',
        'button_name'=>'try it',
        'button_color'=>'#FFFFFF',
        'button_padding'=>'4px 20px',
        'duration' => 3000,
        'close' => 'true',
        'gravity' => 'top',
        'position' => 'right',
        'stopOnFocus' => "true",
        'background' => 'linear-gradient(to right, rgb(16 44 60), rgb(0, 148, 255))',
        'onClick' => ''
    ), $atts );

    ob_start(); ?>
    <button id="<?php echo esc_attr($a['id']); ?>" class="button" style="font-size:<?php echo esc_attr($a['button_font_size']); ?>; background: <?php echo esc_attr($a['button_background']); ?> ;padding: <?php echo esc_attr($a['button_padding']); ?>;color: <?php echo esc_attr($a['button_color']); ?>;text-decoration: none;"><?php echo esc_html($content); ?></button>
    <script>
        jQuery("#<?php echo esc_attr($a['id']); ?>").on("click", function() {
            var textToCopy = "<?php echo esc_js($content); ?>";
            var dummyElement = document.createElement("textarea");
            dummyElement.value = textToCopy;
            document.body.appendChild(dummyElement);
            dummyElement.select();
            document.execCommand("copy");
            document.body.removeChild(dummyElement);

            Toastify({
                text: "<?php echo esc_js($a['message']); ?>",
                duration: <?php echo esc_js($a['duration']); ?>,
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

add_shortcode('ninja_toastify_copied', 'wprt_toastify_copied');
    

?>