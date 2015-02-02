<?php
	$site_title = 'Chuck Harper.com';
	date_default_timezone_set('America/Los_Angeles');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="icon" type="image/gif" href="/favicon.gif" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link type="text/css" rel="stylesheet" href="/css/screen.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="/css/print.css" media="print" />
<!--[if lt IE 7]>
<link type="text/css" rel="stylesheet" href="/css/ie6.css" media="all">
<![endif]-->
<!--[if lt IE 8]>
<link type="text/css" rel="stylesheet" href="/css/ie.css" media="all">
<![endif]-->
<!--[if lt IE 9]>
<link type="text/css" rel="stylesheet" href="/css/ie8.css" media="all">
<![endif]-->
	<link media="only screen and (max-device-width: 480px)" href="/css/handheld.css" type="text/css" rel="stylesheet" />
	<script src="/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	
	<link rel="stylesheet" type="text/css" href="/js/shadowbox-3.0.3/shadowbox.css">
	<script src="/js/shadowbox-3.0.3/shadowbox.js" type="text/javascript"></script>
	<script src="/js/dimensions_1.2/jquery.dimensions.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/js/jquery-tooltip/jquery.tooltip.css">
	<script src="/js/jquery-tooltip/jquery.tooltip.min.js" type="text/javascript"></script>
	<?php
		if (empty($description)) $description = 'Chuck Harper offers consulting services for web development, desktop support, digital video editing, and database development using the fifteen years experience gained while working for companies like 20th Century Fox, and AEG Worldwide. While working for AEG Chuck has built web sites for some of the biggest names in entertainment including Bon Jovi, Tina Turner, Cher, Celine Dion, and Michael Jackson.';
		if (empty($title)) $title = $site_title;
	?>
	<meta name="description" content="<?php print($description); ?>" />
	<meta name="keywords" content="Chuck Harper, 92708, PHP, IT Consultant, Adventures Anonymous, AEG, AEG Live, Apple, Macintosh, Microsoft Windows, Linux, web developer, web technologies, XHTML, XML, CSS, JavaScript, AJAX, RSS, Flash, ActionScript, Java, PHP, Digital video editing, compositor, animator, Final Cut Pro, Motion, database developer, Filemaker Pro, 4th Dimension, Microsoft Access, MySQL, Adobe Photoshop, Adobe Illustrator" />
	<meta name="title" content="<?php print($title); ?>" />
	<link rel="image_src" href="http://<?php print($_SERVER['SERVER_NAME']); ?>/images/fbimage.jpg" />