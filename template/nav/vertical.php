<?

if( $nav_segment == 'open' ) : ?>
<? endif;



if( $nav_segment == 'off' ) : ?>
<p><a href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>"><?=get_nav_name( $nav_element );?></a></p>
<? endif;



if( $nav_segment == 'on' ) : ?>
<p class="on"><a class="on" href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>"><?=get_nav_name( $nav_element );?></a></p>
<? echo get_nav($nav_element, "verticalsub"); ?>
<? endif;



if( $nav_segment == 'spacer' ) : ?>
<? endif;




if( $nav_segment == 'close' ) : ?>
<? endif;




?>


