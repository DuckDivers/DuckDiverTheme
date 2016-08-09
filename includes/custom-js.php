<?php
add_action( 'wp_enqueue_scripts', 'cherry_child_custom_scripts' );

function cherry_child_custom_scripts() {
		wp_enqueue_script( 'duck-custom', CHILD_URL . '/js/duck-custom.js', array ('jquery'), '1.0', true);
} ?>