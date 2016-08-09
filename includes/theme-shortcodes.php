<?php
//Column Code
function duck_diver_columns( $atts, $content = null) {
	$content = remove_invalid_tags( $content, array('p') );
	extract(shortcode_atts(array(
		'class' => '',
	), $atts));
	// add divs to the content
	$return = '<div class="' . $class .'">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode ('column', 'duck_diver_columns');
add_shortcode ('div', 'duck_diver_columns');
add_shortcode ('col' , 'duck_diver_columns');

// Homepage Featured
function homepage_featured_item_shortcode($atts, $content = null){
	extract (shortcode_atts(array(
		'img' 		=> '',
		'item'  	=> '',
		'alt' 		=> '',
		'icon'		=> '',
		'target'	=> '_self',
		'link'		=> '',
		), $atts ));
	$output = '<figure class="homepage-featured"><a href="'.$link.'" target="'.$target.'" class="homepage-featured"><img src="'.$img.'" alt="'.$alt.'" class="img-responsive"></a></figure>';
	return $output;
}
add_shortcode('home-linked-image', 'homepage_featured_item_shortcode');

?>