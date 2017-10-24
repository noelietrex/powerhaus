<?

/*
To prepend hardcoded links to the breadcrumb, add them within the 'open' state,
AND uncomment "$cb->display_on_top_level_page=true;" below for better consistency.
*/

if ($nav_segment == 'open') : ?>
<div class="breadcrumb">
<? endif;


if ($nav_segment == 'off') : ?>
<a href="<?=get_nav_URL($nav_element, $arguments);?>" target="<?=get_nav_target($nav_element);?>" class=nav><?=get_nav_name($nav_element);?></a>
<? endif;



if ($nav_segment == 'on') :
	$cb = new spinsite_content_breadcrumb;
	// $cb->display_on_top_level_page=true;
	echo $cb->get_html();
endif;


/* you should generally not change this 'spacer' code. The actual separator
character can be changed in the site manager */
if ($nav_segment == 'spacer') :
	echo ' ' . spinsite_misc_content('breadcrumb_separator') . ' ';
endif;




if ($nav_segment == 'close') : ?>
</div>
<? endif;



?>
