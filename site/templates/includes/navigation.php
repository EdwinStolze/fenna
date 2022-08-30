<nav id="main-navigation">
	<ul class="menu l-clearfix l-inline-list">
		<?php 
		$homePage = $pages->get('/')->url ;
		$class = $page ===  $pages->get('/') ? 'class="is-active"' : ""; 
		echo "<li><a {$class} href='{$homePage}'>home</a></li>";
		foreach ($pages->get('/')->children as $child ) : 
			$class = $page === $child ? 'class="is-active"' : ""; 
			echo "<li><a {$class} href='{$child->url}'>{$child->title}</a>";
			if ($child->numChildren) {
				echo "<ul>";
				foreach ($child->children as $grandchild ) :
					$class = $child === $grandchild ? 'class="is-active"' : ""; 
					echo "<li><a {$class} href='{$grandchild->url}'>{$grandchild->title}</a></li>";
				endforeach ;
				echo "</ul></li>";

			} else {
				echo "</li>";
			}
		endforeach ;
		?>
	</ul>
</nav>