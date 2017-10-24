<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?=spinsite_document_title(); ?></title>
	<? display_meta_tags(); ?>
	<link rel="stylesheet" href="css/popup.css" type="text/css">
	<link rel="stylesheet" href="css/wdcontent.css" type="text/css">
</head>
<body>
	<?
	$content = new spinsite_page_content();
	$content->auto_breadcrumb = false;
	echo $content->content();
	?>
</body>
</html>
