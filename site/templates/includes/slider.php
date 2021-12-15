<?php 
if (count($page->images) > 0 ) {
	$headerImage = $page->images->first ;
} else {
	$headerImage = $pages->get('/')->images->first ;
}
?>

<section>
	<div class="slider">
		<div class="slider-overlay">
			<img class="l-align-left" src="/public/images/Logo.png" alt="Logo">
			<div class="l-floated-content">
				<h1 class="slider-title">Fenna van den Berg Coaching</h1>
				<p class="slider-payoff">Personal coach</p>
				<p class="slider-payoff">Burnoutbehandeling / preventie</p>
				<p class="slider-payoff">Rotterdam</p>
			</div>
		</div>
		<div class="slider-wrapper">
			<img class="l-align-left" src="<?php echo $headerImage->url ; ?>" alt="<?php echo $headerImage->description ; ?>">			
		</div>
	</div>
</section>