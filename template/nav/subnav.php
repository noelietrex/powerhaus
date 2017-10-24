<?


if( $nav_segment == 'open' ) : ?>
<p>
<? endif;


if( $nav_segment == 'on' ) : ?> 
<b><a class="on" href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>"><?=get_nav_name( $nav_element );?></a></b>
<? endif;


if( $nav_segment == 'spacer' ) : ?>
&nbsp;|&nbsp;
<? endif;


if( $nav_segment == 'off' ) : ?>
<a href="<?=get_nav_URL( $nav_element, $arguments );?>" target="<?=get_nav_target($nav_element);?>"><?=get_nav_name( $nav_element );?></a>
<? endif;


if( $nav_segment == 'close' ) : ?>
</p>
<? endif;


?>
