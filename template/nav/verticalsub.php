<?

if( $nav_segment == 'open' ) : ?>
<div class="wd_subnav">
<? endif;


if( $nav_segment == 'on' ) : ?>
	<p><a href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>" class="on"><?=get_nav_name( $nav_element );?></a></p>
<? endif;


if( $nav_segment == 'off' ) : ?>
	<p><a href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>"><?=get_nav_name( $nav_element );?></a></p>
<? endif;


if( $nav_segment == 'spacer' ) : ?>
<? endif;



if( $nav_segment == 'close' ) : ?>
</div>
<? endif;




?>


