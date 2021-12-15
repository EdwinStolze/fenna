<!DOCTYPE html>
<html>
    <?php include('includes/head.php') ; ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<?php include('includes/header.php') ; ?>
		<?php include('includes/navigation.php') ; ?>
		<?php include('includes/slider.php') ; ?>

		<div class="main">

			<div class="l-container t-content row">
				

				<section class="">

					<div class="content l-align-left t-margin">
						<h1 class="content-title t-margin" ><?php echo $page->title ; ?></h1>
						<?php if ($page->intro) : ?>
						<div class="content-intro t-margin">
							<?php echo $page->intro ; ?>
						</div>
						<?php endif ; ?>
						<div class="content-body one-column">
							<?php echo $page->body ; ?>
						</div>
					</div>	

				</section>

			<?php 
				if ($page->personalia ) : ?>
					<div class="l-container content">
						<img class="divider" src="/public/images/divider.png" alt="separator">
					</div>
					<?php 
					include('includes/personal.php');
				endif ;
				?>
			</div>
		</div>

		<?php include('includes/footer.php') ; ?>
		<?php include('includes/endscripts.php') ; ?>
    </body>
</html>
