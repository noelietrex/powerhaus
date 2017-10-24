<?


if( $nav_segment == 'open' ) : ?>
<? endif;


if( $nav_segment == 'on' ) : ?>
<a href="<?php echo get_nav_URL( $nav_element, $arguments ); ?>" target="<?=get_nav_target($nav_element);?>"><?php echo get_nav_name( $nav_element ); ?></a>
<? endif;


if( $nav_segment == 'spacer' ) : ?>
<? endif;


if( $nav_segment == 'off' ) : ?>
<a href="<?php echo get_nav_URL( $nav_element, $arguments ); ?>" target="<?=get_nav_target($nav_element);?>"><?php echo get_nav_name( $nav_element ); ?></a>
<? endif;


if( $nav_segment == 'close' ) : ?>
<? endif;


?>
