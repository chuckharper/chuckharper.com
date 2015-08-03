<?php 
	$nav = 'photos';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
	<title><?php print($site_title); ?> | Photos</title>
	
	<script src="/js/inside.js" type="text/javascript"></script>

</head>
<body id="body_photos" class="inside_body">
	<div id="inside_wrapper"><div id="main_inside">
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'); ?>
		<h2>Photos</h2>
		<div id="photo_list">
			<?php
				for($i=1;$i<10;$i++) {
				print <<<EOT
					<a href="/pictures" title="Photo"><img src="https://s3-us-west-1.amazonaws.com/chuckharper/images/photos/thumb/photo-{$i}.jpg" alt="" /></a>
EOT;
				/*
					print <<<EOT
					<a rel="shadowbox[Photos]" href="https://s3-us-west-1.amazonaws.com/chuckharper/images/photos/photo-{$i}.jpg" title="Photo"><img src="https://s3-us-west-1.amazonaws.com/chuckharper/images/photos/thumb/photo-{$i}.jpg" alt="" /></a>
EOT;
				*/
				}
			?>
		</div>
	</div></div>
	
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer_personal.php'); ?>
</body>
</html>
