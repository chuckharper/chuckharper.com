<?php
	// error_reporting(0);
	
	function corpSort($a,$b) {
		return strcasecmp($a['corp'],$b['corp']);
	}
	
	$sponsors = array();
	$sponsors[] = array('corp'=>'ACME Corporation','image'=>'acme.png','ref'=>'Looney Tunes','link'=>'http://looneytunes.warnerbros.com');
	$sponsors[] = array('corp'=>'Aperture Science','image'=>'aperture_science.png','ref'=>'Portal','link'=>'http://orange.half-life2.com/portal.html');
	$sponsors[] = array('corp'=>'Benthic Petroleum','image'=>'benthic.png','ref'=>'The Abyss','link'=>'http://www.imdb.com/title/tt0096754/');
	$sponsors[] = array('corp'=>'Blue Sun','image'=>'bluesun.png','ref'=>'Firefly/Serenity','link'=>'http://www.imdb.com/title/tt0303461/');
	$sponsors[] = array('corp'=>'Buy n Large','image'=>'buynlarge.png','ref'=>'Wall&bull;E','link'=>'http://disney.go.com/disneypictures/wall-e/');
	$sponsors[] = array('corp'=>'CHOAM','image'=>'choam.png','ref'=>'Dune','link'=>'http://en.wikipedia.org/wiki/Dune_(novel)');
	$sponsors[] = array('corp'=>'Cyberdyne','image'=>'cyberdyne.png','ref'=>'Terminator 2','link'=>'http://www.imdb.com/title/tt0103064/');
	$sponsors[] = array('corp'=>'Dinoco','image'=>'dinoco.png','ref'=>'Pixar Films (Cars, Toy Story)','link'=>'http://www.pixar.com');
	$sponsors[] = array('corp'=>'Initech','image'=>'initech.png','ref'=>'Office Space','link'=>'http://www.imdb.com/title/tt0151804/');
	$sponsors[] = array('corp'=>'Knight Industries','image'=>'knight_industries.gif','ref'=>'Knight Rider','link'=>'http://www.imdb.com/title/tt0083437/');
	$sponsors[] = array('corp'=>'LexCorp','image'=>'lexcorp.png','ref'=>'Superman','link'=>'http://en.wikipedia.org/wiki/Superman');
	$sponsors[] = array('corp'=>'MomCorp','image'=>'momcorp.gif','ref'=>'Futurama','link'=>'http://www.imdb.com/title/tt0149460/');
	$sponsors[] = array('corp'=>'Nakatomi Trading Corporation','image'=>'nakatomi.gif','ref'=>'Die Hard','link'=>'http://www.imdb.com/title/tt0095016/');
	$sponsors[] = array('corp'=>'Global Dynamics','image'=>'global_dynamics.png','ref'=>'Eureka','link'=>'http://www.imdb.com/title/tt0796264/');
	$sponsors[] = array('corp'=>'Oceanic Airlines','image'=>'oceanic.gif','ref'=>'Lost','link'=>'http://www.imdb.com/title/tt0411008/');
	$sponsors[] = array('corp'=>'Omni Consumer Products','image'=>'ocp.gif','ref'=>'Robocop','link'=>'http://www.imdb.com/title/tt0093870/');
	$sponsors[] = array('corp'=>'OsCorp','image'=>'oscorp.png','ref'=>'Spiderman','link'=>'http://en.wikipedia.org/wiki/Spider-Man');
	$sponsors[] = array('corp'=>'Planet Express','image'=>'planetexpress.gif','ref'=>'Futurama','link'=>'http://www.imdb.com/title/tt0149460/');
	$sponsors[] = array('corp'=>'Stark Industries','image'=>'stark.png','ref'=>'Iron Man','link'=>'http://en.wikipedia.org/wiki/Iron_man');
	$sponsors[] = array('corp'=>'Umbrella Corporation','image'=>'umbrella.gif','ref'=>'Resident Evil','link'=>'http://en.wikipedia.org/wiki/Resident_evil');
	$sponsors[] = array('corp'=>'Weyland Yutani','image'=>'weylandyutani.gif','ref'=>'Aliens','link'=>'http://www.imdb.com/title/tt0090605/');
	$sponsors[] = array('corp'=>'Yoyodyne Propulsion Systems','image'=>'yoyodyne.gif','ref'=>'The Adventures of Buckaroo Banzai Across the 8th Dimension','link'=>'http://www.imdb.com/title/tt0086856/');
	$sponsors[] = array('corp'=>'Wonka Candy Company','image'=>'wonka.gif','ref'=>'Willy Wonka and the Chocolate Factory','link'=>'http://www.imdb.com/title/tt0067992/');
	$sponsors[] = array('corp'=>'Tyrell Corporation','image'=>'tyrell.gif','ref'=>'Blade Runner','link'=>'http://www.imdb.com/title/tt0083658/');
	$sponsors[] = array('corp'=>'Ryan Industries','image'=>'ryan_industries.jpg','ref'=>'Bioshock','link'=>'http://en.wikipedia.org/wiki/Bioshock');
	$sponsors[] = array('corp'=>'Kwik E Mart','image'=>'kwik_e_mart.png','ref'=>'The Simpsons','link'=>'http://www.imdb.com/title/tt0096697/');
	$sponsors[] = array('corp'=>'Reardon Steel','image'=>'reardon.png','ref'=>'Atlas Shrugged','link'=>'http://en.wikipedia.org/wiki/Atlas_Shrugged');
	$sponsors[] = array('corp'=>'Taggart Transcontinental','image'=>'taggart.gif','ref'=>'Atlas Shrugged','link'=>'http://en.wikipedia.org/wiki/Atlas_Shrugged');
	$sponsors[] = array('corp'=>'American Vampire League','image'=>'avl.gif','ref'=>'True Blood','link'=>'http://www.hbo.com/trueblood/');
	$sponsors[] = array('corp'=>'Fellowship of the Sun','image'=>'fots.gif','ref'=>'True Blood','link'=>'http://www.hbo.com/trueblood/');
	$sponsors[] = array('corp'=>'Lunar Industries, Inc.','image'=>'lunar_industries.png','ref'=>'Moon','link'=>'http://www.imdb.com/title/tt1182345/');
	$sponsors[] = array('corp'=>'Multi National United','image'=>'mnu.png','ref'=>'District 9','link'=>'http://www.multinationalunited.com/');
	$sponsors[] = array('corp'=>'Resource Development Administration','image'=>'rda.png','ref'=>'James Cameron&rsquo;s Avatar','link'=>'http://www.avatarmovie.com/');
	$sponsors[] = array('corp'=>'ENCOM','image'=>'encom.gif','ref'=>'TRON','link'=>'http://www.imdb.com/title/tt0084827/');
	$sponsors[] = array('corp'=>'Zik Zak','image'=>'zikzak.png','ref'=>'Max Headroom','link'=>'http://www.imdb.com/title/tt0092402/');
	$sponsors[] = array('corp'=>'Rossum Corporation','image'=>'rossum.png','ref'=>'Dollhouse','link'=>'http://www.imdb.com/title/tt1135300/');
	$sponsors[] = array('corp'=>'Shipstone Corporation','image'=>'shipstone.png','ref'=>'Robert A. Heinlein Expanded Universe','link'=>'http://en.wikipedia.org/wiki/Friday_%28novel%29');
	$sponsors[] = array('corp'=>'Veidt Industries','image'=>'veidt.png','ref'=>'Watchmen','link'=>'http://en.wikipedia.org/wiki/Watchmen');
	$sponsors[] = array('corp'=>'ATMOS','image'=>'atmos.gif','ref'=>'Doctor Who','link'=>'http://en.wikipedia.org/wiki/The_Sontaran_Stratagem');
	$sponsors[] = array('corp'=>'Jennings &amp; Rall','image'=>'jennings_rall.png','ref'=>'Jericho','link'=>'http://www.imdb.com/title/tt0805663/');
	$sponsors[] = array('corp'=>'Goliath National Bank','image'=>'gnb.png','ref'=>'How I Met Your Mother','link'=>'http://www.imdb.com/title/tt0460649/');
	$sponsors[] = array('corp'=>'MacLaren’s Irish Pub','image'=>'maclarens.png','ref'=>'How I Met Your Mother','link'=>'http://www.imdb.com/title/tt0460649/');
	$sponsors[] = array('corp'=>'Wayne Enterprises','image'=>'wayne.png','ref'=>'Batman','link'=>'http://en.wikipedia.org/wiki/Batman');
	$sponsors[] = array('corp'=>'Trask Industries','image'=>'trask.gif','ref'=>'X-Men','link'=>'http://www.trask-industries.com');
	$sponsors[] = array('corp'=>'Gizmonic Institute','image'=>'gizmonic.png','ref'=>'Mystery Science Theater 3000','link'=>'http://en.wikipedia.org/wiki/Mystery_Science_Theater_3000');
?>
		<ul id="sponsors" class="clearfix">
	<?php
	
		$sorted = false;
		if (!isset($sponsor_count)) $sponsor_count = 5;
		if ($sponsor_count > count($sponsors)) $sponsor_count = count($sponsors);		// limit the sponsor count to the length of the array
		if ($sponsor_count == count($sponsors)) {
			usort($sponsors,'corpSort');
			$sorted = true;
		}
		
		$class = ' class="first_li"';
		for($i=0;$i<$sponsor_count;$i++) {
			if ($sorted) {
				$j = $i;
			} else {
				$j = array_rand($sponsors);
			}
			$sponsor = $sponsors[$j];
			print <<<EOT
				<li{$class}>
					<a href="{$sponsor['link']}" rel="external">
						<img src="https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/{$sponsor['image']}" alt="{$sponsor['corp']}" title="{$sponsor['corp']} [{$sponsor['ref']}]" />
					</a>
				</li>
EOT;
			$class = '';
			unset($sponsors[$j]);
		}
	?>
		</ul>