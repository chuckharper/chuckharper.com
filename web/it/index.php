<?php 
	date_default_timezone_set('America/Los_Angeles');
	$nav = 'it';
	
	$years_lookup = array(16 => 'Sixteen',17 => 'Seventeen', 18 => 'Eighteen', 19 => 'Nineteen', 20 => 'Twenty');
	$it_years = round((date('U') - strtotime('8/1/1995'))/31557600);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
	<title><?php print($site_title); ?> | Information Technology</title>
	
	<script src="/js/inside.js" type="text/javascript"></script>
	<script src="/js/it.js" type="text/javascript"></script>

</head>
<body id="body_it" class="inside_body">
	<div id="inside_wrapper"><div id="main_inside">
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'); ?>
		<h2>Information Technology</h2>
		<div class="intro">
			<p><a href="https://s3-us-west-1.amazonaws.com/chuckharper/images/server_rack.jpg" rel="shadowbox[Mixed];width=480;height=480" class="leading_image"><img src="https://s3-us-west-1.amazonaws.com/chuckharper/images/server_rack_thumb.jpg" alt="" /></a>In August 1995 I started my first official job as a computer professional as the <em>Technical Support Manager</em> for <a href="http://www.sonnettech.com/" rel="external">Sonnet Technologies</a>. While working for Sonnet I did end-user technical support over the phone and maintained all of Sonnet's computers and network equipment.</p>
			<p>In August 1997 I took a position with <a href="http://www.foxmovies.com/" rel="external">20th Century Fox</a> as a Macintosh Field Tech; maintaining and installing Macintosh computers at the Pico lot and at production offices all over Los Angeles. In September 1998 I was offered a salary position with Feature Production and Accounting as a <em>Systems Analyst</em> and provided technical support to all film production offices. As a <em>Systems Analyst</em> I began supporting Windows computers professionally for the first time.</p>
			<p>In February 1999 I began taking freelance clients on a limited basis providing on-site desktop and network support.</p>
		</div>
		<ul class="bulletlist sectionbreak">
			<li><?php print($years_lookup[$it_years]); ?> years experience working in information technology.</li>
			<li>Experienced on Apple Mac, Microsoft Windows, and Linux operating systems.</li>
			<li>Expert troubleshooter with the Mac OS version 6.0.7 through 10.7, and Mac OS X Server.</li>
			<li>Database developer in Filemaker Pro, 4th Dimension, Microsoft Access, and MySQL.</li>
			<li>Experience writing installation instructions and technical documentation.</li>
			<li>Experienced with Cat. 5,5e &amp; 6 ethernet wiring.</li>
			<li>Configuration of routers and firewalls.</li>
		</ul>
		<div id="typecode"></div>
	</div></div>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>
