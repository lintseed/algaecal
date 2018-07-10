<?php
function include_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'include_custom_jquery');
