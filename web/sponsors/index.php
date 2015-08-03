<?php 
	$nav = '';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
	<title><?php print($site_title); ?> | Sponsors</title>
	
	<script src="/js/inside.js" type="text/javascript"></script>

</head>
<body id="body_sponsors" class="inside_body">
	<div id="inside_wrapper"><div id="main_inside">
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'); ?>
		<h2>Sponsors</h2>
		<div class="intro">
			<p>While working for AEG Live I was frequently asked to add sponsor logos to commerical websites. In 2008, while driving to San Diego Comic Con I had an idea for adding sponsor logos to my personal website, but not just any sponsors, I wanted to use ficitious companies from my favorite movies, televisions shows and novels.</p>
			<p class="addendum">Note: If you hold your mouse over a sponsor logo the tooltip will tell you the name of the company and the movie/tv show/book it&rsquo;s from. If you click on the sponsor logo it will take you to an IMDB or Wikipedia page for the fictional universe the sponsor is from.</p>
		</div>
		<?php
			$sponsor_count = 10000;
			include($_SERVER['DOCUMENT_ROOT'] . '/includes/sponsors.php');
		?>
	</div></div>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>
