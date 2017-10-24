<?

// This initializes the $content object for your use below
$content = new spinsite_page_content();

// This creates html for the right side features, or sets to false if none should display.
// If $sidebar_features is false, the main content column should expand to fill the unused sidebar space
$sidebar_features = ($CURRENT_NODE['attributes']['content_type']=="newsfeed_releases" && $ITEM)
	? false : $content->featureboxes('right');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title><?=spinsite_document_title(); ?></title>
	<? display_meta_tags(); ?>	
    <style type="text/css">
	.crisis-content {
    		color: #000;
    		font-family: sans-serif;
		font-size: 12px;
		width: 800px;
		margin: 0 auto;
	}
    </style>
    <?=spinsite_rss_alt_link('news_releases')?>		  
</head>

<body>
	<div class="crisis-content">
<?

// MAIN CONTENT AREA

// uncomment this line to prevent the page title from automatically displaying above the page content
// $content->auto_title = false;

// Uncomment (and move) this line to place the page title in an alternate location
// echo '<div class="page_header">' . $content->title() . '</div>';

echo $content->content();

?>
		<div class="crisis-footer">
			<? echo spinsite_misc_content('footer'); ?>
		</div>
	</div>
	<? include_inline_template('tracking_code'); ?>
	
</body>
</html>
