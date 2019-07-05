<?php
add_shortcode('ff_custom_dropdown_menu', function($atts){
	ob_start();
	extract( shortcode_atts( array(
		'menu' => 'Header Dropdown Menu',
		'class' => '',
	), $atts));
	$add_class = ( $class != '' ) ? ' '. $class : '';
	echo '<div id="ff-custom-dropdown-menu" class="ff-custom-dropdown-menu'. $add_class .'">';
		echo '<span id="burger-menu-trigger" class="burger-menu-trigger noselect">ME<br/>NU</span>';
		echo '<div id="custom-dropdown-menu" class="menu-container">';
			wp_nav_menu(array( 'menu' => $menu ));
		echo '</div>';
	echo '</div>';
	return ob_get_clean();
});
