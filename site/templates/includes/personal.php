<?php 
	$personalPage = $pages->get('/personal');
	$pasfoto = $pages->get('/personal')->pasfoto ;
?>			
<section class="l-container row">
	<div class=" t-margin col-10">
		<div class="personal col-8 t-margin">
			<div class="personal-image-wrapper l-image-left">
				<img class="" src="<?php echo $pasfoto->first()->url ; ?>" alt="<?php echo $pasfoto->description ; ?>">
			</div>
			<h2><?php echo $personalPage->title ; ?></h2>
			<?php echo $personalPage->body ; ?>
		</div>
	</div>
</section>