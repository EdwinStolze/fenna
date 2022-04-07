<header id="main-header">
	<div class="l-container">
		<ul class="langswitch">
			<?php
				foreach($languages as $language) {
					if($language->id == $user->language->id) continue;
					// if(!$page->viewable($language)) continue;
					if(!$page->viewable($language)) {
						$url = $pages->get("/")->localUrl($language);
					} else {
						$url = $page->localUrl($language);
					}
					$flag = file_get_contents('../../../public/images/nederlands.svg'); 
					if ($language->name == 'en') {
						$flag = file_get_contents('../../../public/images/english.svg');
					} 
					echo "<li><a href='$url'>{$flag}</a></li>";
				}
			?>
		</ul>
		<ul>
			<li class="social facebook"><a href="https://www.facebook.com/pages/Fenna-van-den-Berg-lifepersonal-coachingcounseling/666703320016240" target="_blank"></a></li>
			<li class="social twitter"><a href="https://twitter.com/fennavdberg" target="_blank"></a></li>
			<li class="social linkedIn"><a href="http://www.linkedin.com/pub/fenna-van-den-berg/81/984/72" target="_blank"></a></li>
		</ul>
	</div>
</header>	