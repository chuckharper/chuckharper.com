<?php 
	$nav = 'bookmarks';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
	<title><?php print($site_title); ?> | 404</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="/js/inside.js" type="text/javascript"></script>

</head>
<body id="body_404" class="inside_body">
	<div id="inside_wrapper"><div id="main_inside">
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'); ?>
		<h2 class="noimage">404 - File Not Found</h2>
		<div class="linkgroup" style="padding: 3em 1em 12em;">
			<h3>This Page Does Not Exist</h3> 
			<p>Use the navigation menu at the top of the page to try to find something that does exist.</p>
		</div>	
	</div></div>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer_personal.php'); ?>
</body>
</html>
