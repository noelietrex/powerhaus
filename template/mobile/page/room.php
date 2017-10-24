<?
// This initializes the $content object for your use below
$content = new spinsite_page_content();

?>
<!DOCTYPE html> 
<html> 
	<head> 
	<title><?= spinsite_document_title() ?></title>
	<? display_meta_tags(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">	
	<link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css">

	<link rel="stylesheet" href="css/wd_mobile.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/wd_media_query.css">
	<? spin_require_js('head_start', 'js/jquery-webdriver.js') ?>
   	<script type="text/javascript" src="js/wd_mobile.js"></script>
	<script src="js/jquery.mobile-1.3.2.min.js"></script>
</head> 
<body> 

<div data-role="page" class="pages" id="home">
	<div data-role="header">
		<a href="#menu" class="showMenu"></a>
			<h1><!-- add logo here --></h1>
		<a href="#menu" class="showMenu search"></a>
	</div><!-- /header -->
	<div data-role="content" id="content">
		<?
		// define the "Back to" link:
		$backtolink = (
			'<a href="' . get_nav_URL($CURRENT_NODE['id']) . '" style="position:relative; top: -50px;" data-role="button" data-icon="arrow-l" class="pull-right green">Back</a>'
		);

		// display "Back to" link on item detail pages:
		$content->setcustomhtml('above_detail', $backtolink);

		// display "Back to" link on category pages:
		if ($_GET['cat'] || $_GET['category']) $content->setcustomhtml('above_content', $backtolink);

		$content->auto_title = false;
	
		echo '<h4>' . $content->title() . '</h4>';
		echo $content->content();
		echo $content->featureboxes('socialhub');
		echo $content->featureboxes('middle');
		$toolbar = new spinsite_page_toolbar();
		$toolbar->label_position="top";
		$toolbar->hide_tool('print');
		echo '<br style="clear:both;">'
			. '<div align="center">' . $toolbar->toolbar() .'</div>';

		include_inline_template('tags');
		
		?>        
	</div><!-- /content -->
	<div data-role="footer">
	    <p class="footer-link"><?= '<a href="'.clean_url(array('mobile'=>'No')).'">Visit Non Mobile Site</a>'; ?></p>
        <!--<p class="copyright">&copy; <? // spinsite_misc_content('footer'); ?></p>-->
	</div><!-- /footer -->
	<div id="menu" data-role="panel" data-position="left" data-display="reveal" data-swipe-close="false">
		<ul>
			<li class="searchform"><form method="post" action="<?= get_nav_URL("search_results"); ?>"><input type="search" placeholder="Search..." name="query" data-mini="true" /><input data-role="none" type="submit" class="hide" value=""/></form></li>
			<?= get_nav ( 'mainnav', 'mobile_vertical' ); ?>
		</ul>
	</div>	
</div><!-- /page -->

</body>
</html>
