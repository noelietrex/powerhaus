<?

// This initializes the $content object for your use below
$content = new spinsite_page_content();

// This creates html for the right side features, or sets to false if none should display.
// If $sidebar_features is false, the main content column should expand to fill the unused sidebar space
$sidebar_features = ($CURRENT_NODE['attributes']['content_type']=="newsfeed_releases" && $ITEM)
	? false : ($content->featureboxes('socialhub').$content->featureboxes('right'));

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title><?=spinsite_document_title(); ?></title>
	<? display_meta_tags(); ?>	
	
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/wdcontent.css">
	<link rel="stylesheet" type="text/css" href="css/wd_media_query.css">

	<?=spinsite_rss_alt_link('news_releases')?>		  
</head>

<body class="<?=page_css_classes()?>">

<!--NAV -->
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- END NAV -->




	<!-- BEGIN HEADER -->	
	<div class="wd_header">
		<!-- BEGIN SITE SEARCH -->
		<?
		$sf = new spinsite_search_form;
		$sf->query_label = '';
		$sf->submit_label = 'Search';
		$sf->query_placeholder = 'Keywords...';
		$sf->submit_button = true;
		$sf->output_html();
		?>
		<!-- END SITE SEARCH -->

		<? if (spinsite_misc_content('tagline')): ?>
		<div id="wd_tagline">
			<div class="wd_tagline"><p><?=spinsite_misc_content('tagline');?></p></div>
		</div>
		<? endif; ?>


<? 
if($CURRENT_NODE['code'] == "home") {
	$parameters['interval'] = 8000;
	echo '<div class="container">';
	include_inline_template('single_slider_responsive',$parameters);
	echo '</div>';
} else {
	echo '<div class="wd_pageheader"><div class="container"><h1>' . $content->title() . '</h1></div></div>';
} ?>


<? 

$headerImage = $content->headerimage_url();
if($headerImage): ?>
<div class="wd_home_hero" style="background-image: url(<?= $headerImage ?>);">
	<div class="wd_header_content">
	<?
	echo (spinsite_page_element('header_title') <> '') ? spinsite_page_element('header_title') : spinsite_misc_content('header_title');
	echo (spinsite_page_element('header_description') <> '') ? spinsite_page_element('header_description') : spinsite_misc_content('header_description');
	?>
	</div>
</div>
<? endif; ?>

	</div>
	<!-- END HEADER -->	

	<!-- BEGIN CONTAINER -->	
	<div class="wd_container">
	
		<!-- BEGIN LEFT SIDEBAR -->
		<div class="wd_left-sidebar">
	
			<!-- BEGIN LEFT NAV -->		
			<div class="wd_nav"> 
				<?= get_nav('mainnav','vertical'); ?>
			</div>
			<!-- END LEFT NAV -->			
	
			<!-- BEGIN LEFT FEATURE BOXES -->
			<?= $content->featureboxes('left'); ?>
			<!-- END LEFT FEATURE BOXES -->
	
		</div>
		<!-- END LEFT SIDEBAR -->
		
		<!-- BEGIN CONTENT-WRAPPER -->	
		<div class="wd_content-wrapper">


			<a href="<?= get_nav_URL('home') ?>"><?=get_nav_name('home');?></a><!-- Use the Code field from the Structure table -->
			<a href="<?= get_nav_URL('subscribe') ?>"><?= get_nav_URL('subscribe') ?></a><!-- Use the Code field from the Structure table -->
			<?= get_breadcrumb_nav('breadcrumb'); ?>
			<?
			// control width of content area based on right column
			$content_width = ($sidebar_features) ? 'style="width: 570px;"' : '';
			?>
			<!-- BEGIN CONTENT -->	
			<div class="wd_content" <?= $content_width; ?>>
			<?

			// MAIN CONTENT AREA

			// uncomment this line to prevent the page title from automatically displaying above the page content
			// $content->auto_title = false;
	
			// uncomment (and move) this line to move breadcrumb position
			$content->auto_breadcrumb = false;

			// Uncomment (and move) this line to place the page title in an alternate location
			// echo '<div class="page_header">' . $content->title() . '</div>';

			echo $content->featureboxes('top');
			echo $content->featureboxes('tabbed');
			echo $content->content();
			include_inline_template('tags');
			echo $content->featureboxes('middle');

			?>
			</div>
			<!-- END CONTENT -->
			<? if ($sidebar_features): ?>
			<!-- BEGIN SIDEBAR -->	
			<div class="wd_sidebar">				
				<!-- BEGIN RIGHT FEATURE BOXES -->
				<?= $sidebar_features; ?>
				<!-- END RIGHT FEATURE BOXES -->
			</div>
			<!-- END SIDEBAR -->	
			<? endif; ?>
		</div>
		<!-- END CONTENT-WRAPPER -->		    
		
		<div class="wd_footer">
			<? echo spinsite_misc_content('footer'); ?>
		</div>

		<div class="wd_footer">
			<? echo spinsite_misc_content('footer'); ?>
			&copy; Copyright <?= date(Y) ?>. All Rights Reserved.
		</div>
		
	</div>
	<!-- END CONTAINER -->
	
	<? include_inline_template('tracking_code'); ?>
	

	<script type="text/javascript">
	$(document).ready(function(){
		
		$( "li" ).each(function( index ) {
			console.log( index + ": " + $( this ).text() );
		});



	});
	</script>
</body>
</html>