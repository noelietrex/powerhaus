<?
if( $nav_segment == 'open' )
	echo "\n\t<ul class=\"subnav\">";

if( $nav_segment == 'on' ) {
	echo "\n\t\t".'<li class="active" style="text-indent: 15px;"><a data-ajax="false" href="'. get_nav_URL( $nav_element, $arguments ) .'" target="'. get_nav_target($nav_element) .'">'. get_nav_name( $nav_element ) .'</a></li>';
}

/*
if( $nav_segment == 'spacer' )
	echo '&nbsp;';
*/

if( $nav_segment == 'off' )
	echo "\n\t\t".'<li style="text-indent: 15px;"><a data-ajax="false" href="'. get_nav_URL( $nav_element, $arguments ) .'" target="'. get_nav_target($nav_element) .'">'. get_nav_name( $nav_element ) .'</a></li>';

if( $nav_segment == 'close' )
	echo "\n\t</ul>";

?>
