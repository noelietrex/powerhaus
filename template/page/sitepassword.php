<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><? echo spinsite_document_title(); ?></title>
	<link rel="stylesheet" href="css/wdcontent.css" type="text/css">
</head>
<body style="background-color: #efefef">
<div class="mediaroom-content">
	<?
	$content = new spinsite_page_content();
	$content->auto_breadcrumb = false;
	echo $content->content();
	?>
</div>
</body>
</html>
