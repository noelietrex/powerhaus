<?

// This initializes the $content object for your use below
$content = new spinsite_page_content();

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title><?=spinsite_document_title(); ?></title>
	<? display_meta_tags(); ?>	

	<style type="text/css">
		body {
			color: #333;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 13px;
			line-height: 1.9em;
		}

		a {
			color: #6095C3;
		}

		a:hover {
			color: #000;
			text-decoration: underline;
		}

		h1, h2, h3, h4, h5, h6 {
			margin: 0;
			padding: 5px 0;
			line-height: 1.1em;
		}

		h1, h2, h3 {
			font-weight: normal;
			font-family: Arial, serif;
			color: #000;
		}

		h1 {
			font-size: 2.6em;
		}

		h2 {
			font-size: 2.3em;
		}

		h3 {
			font-size: 2.1em;
		}

		h4 {
			font-size: 1.8em;
		}

		h5 {
			font-size: 1.4em;
		}

		h6 {
			font-size: 1.1em;
		}		
	</style>

	<link rel="stylesheet" href="css/wdcontent.css" type="text/css">
    <?=spinsite_rss_alt_link('news_releases')?>		  
</head>

<body>
	<div class="content">
	<?

	// MAIN CONTENT AREA

	// uncomment this line to prevent the page title from automatically displaying above the page content
	// $content->auto_title = false;

	// Uncomment (and move) this line to place the page title in an alternate location
	// echo '<div class="page_header">' . $content->title() . '</div>';

	echo $content->featureboxes('top');
	echo $content->content();
	echo $content->featureboxes('middle');
	$toolbar = new spinsite_page_toolbar();
	$toolbar->label_position="top";
	echo '<br clear="all">' . $toolbar->toolbar();

	?>
		<div class="footer">
			<? echo spinsite_misc_content('footer'); ?>
		</div>
	</div>
	<? include_inline_template('tracking_code'); ?>
	
</body>
</html>
