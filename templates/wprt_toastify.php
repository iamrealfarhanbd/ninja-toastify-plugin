<?php 


function wprt_toastify($atts) {
    $a = shortcode_atts( array(
        'id' => 'new-toast',
        'message' => 'This is a toast',
        'button_name'=>'try it',
        'duration' => 3000,
        'url' => 'https://github.com/apvarun/toastify-js',
        'newWindow' => true,
        'close' => true,
        'gravity' => 'top',
        'position' => 'right',
        'stopOnFocus' => true,
        'background' => 'linear-gradient(to right, #00b09b, #96c93d)',
        'onClick' => ''
    ), $atts );

    ob_start(); ?>
    <a  id="<?php echo esc_attr($a['id']); ?>" class="button"><?php  echo  esc_attr($a['button_name']) ; ?></a>
    <script>
        jQuery("#<?php echo esc_attr($a['id']); ?>").on("click", function() {
            Toastify({
                text: "<?php echo esc_js($a['message']); ?>",
                duration: <?php echo esc_js($a['duration']); ?>,
                destination: "<?php echo esc_js($a['url']); ?>",
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
add_shortcode('toastify', 'wprt_toastify');
    

?>