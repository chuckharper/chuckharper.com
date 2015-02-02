<?php
			$it_active = '';$video_active = '';$web_active = '';$bookmarks_active = '';$photos_active = '';$about_active = '';
			if ($nav == 'it') $it_active = ' class="active"';
			if ($nav == 'video') $video_active = ' class="active"';
			if ($nav == 'web') $web_active = ' class="active"';
			if ($nav == 'bookmarks') $bookmarks_active = ' class="active"';
			if ($nav == 'photos') $photos_active = ' class="active"';
			if ($nav == 'about') $about_active = ' class="active"';
		?>
		<ul id="nav" class="clearfix">
			<li id="nav_home"><a href="/">chuckharper.com</a></li>
			<li id="nav_it"<?php print($it_active); ?>><a href="/it/" title="Information Technology">Information Technology</a></li>
			<li id="nav_video"<?php print($video_active); ?>><a href="/video/" title="Video Editing &amp; Post Production">Video Editing &amp; Post Production</a></li>
			<li id="nav_web"<?php print($web_active); ?>><a href="/web/" title="Web Development">Web Development</a></li>
			<li id="nav_about"<?php print($about_active); ?>><a href="/about/" title="About Chuck">About Chuck</a></li>
			<li id="nav_bookmarks"<?php print($bookmarks_active); ?>><a href="/bookmarks/" title="Bookmarks">Bookmarks</a></li>
			<li id="nav_photos"<?php print($photos_active); ?>><a href="/photos/" title="Photos">Photos</a></li>
		</ul>		
		<div id="mousetext">1974.415</div>