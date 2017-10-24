<?

if ( $nav_segment == 'open' ) {
	//echo "\n\t<ul>";
}

if( $nav_segment == 'on' ) {

$has_children = get_nav($nav_element, "mobile_vertical_sub");

$background_gradient = ($has_children) ? 'class="has_children_on"' : '';

$icon = ($has_children) ? '<span class="ui-icon ui-icon-plus subnav_collapse"> </span>' : '';

	echo "\n\t\t".'<li class="active" '. $background_gradient .'><a data-ajax="false" href="'. get_nav_URL( $nav_element, $arguments ) .'" target="'. get_nav_target($nav_element) .'">'. get_nav_name( $nav_element ) . $icon . '</a>';
	echo get_nav($nav_element, "mobile_vertical_sub");
	echo '</li>';
}

/*
if( $nav_segment == 'spacer' )
	echo '&nbsp;';
*/

if( $nav_segment == 'off' ) {

$has_children = get_nav($nav_element, "mobile_vertical_sub");

$background_gradient = ($has_children) ? 'class="has_children_off"' : '';	

$icon = ($has_children) ? '<span class="ui-icon ui-icon-plus subnav_collapse"> </span>' : '';
	
	echo "\n\t\t".'<li '. $background_gradient .'><a data-ajax="false" href="'. get_nav_URL( $nav_element, $arguments ) .'" target="'. get_nav_target($nav_element) .'">'. get_nav_name( $nav_element ) . $icon . '</a>';
	echo get_nav($nav_element, "mobile_vertical_sub");
	echo '</li>';
}

if( $nav_segment == 'close' ) {
	echo '<li class="link-desktop"><a href="'.clean_url(array('mobile'=>'No')).'">Visit Non Mobile Site</a></li>';
	//echo "\n\t</ul>";
}
?>
