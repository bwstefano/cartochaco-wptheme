<?php

/*
 * Geocode box
 */

function cartochaco_geocode_box_scripts() {
	wp_enqueue_script('geocode-box', get_stylesheet_directory_uri() . '/js/geocode-box.js', array('jquery', 'jeo.geocode.box'), '0.0.3');
}
add_action('wp_enqueue_scripts', 'cartochaco_geocode_box_scripts');

add_action('wp_footer', 'cartochaco_geocode_box');
function cartochaco_geocode_box() {
	?>
	<div id="geocode-box">
		<div class="geocode-box-container">
			<a href="#" class="close-geocode" title="<?php _e('Close', 'jeo'); ?>">×</a>
			<?php jeo_geocode_box(); ?>
			<p><a class="button finish-geocode-box" href="#"><?php _e('Finish geocoding', 'jeo'); ?></a></p>
		</div>
	</div>
	<?php
}
