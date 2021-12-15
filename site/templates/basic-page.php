<!DOCTYPE html>
<html>
<?= $page->render('includes/head.php') ; ?>
<body>
	<?= $page->render('includes/header.php') ; ?>
	<?= $page->render('includes/navigation.php') ; ?>
	<?= $page->render('includes/slider.php') ; ?>
    <div class="main">
        <div class="l-container t-content row">
            <section class="">
                <div class="content l-align-left t-margin">
                    <h1 class="content-title t-margin"><?php echo $page->title ; ?></h1>
                    <?php if ($page->intro) : ?>
                    <div class="content-intro t-margin">
                        <?php echo $page->intro ; ?>
                    </div>
                    <?php endif ; ?>
                    <div class="content-body">
                        <?php echo $page->body ; ?>
                    </div>
                </div>
            </section>
            <?php if ($page->personalia ) : ?>
					<div class="l-container content">
						<img class="divider" src="/public/images/divider.png" alt="separator">
					</div>
			<?php 
				echo $page->render('includes/personal.php');
				endif ; ?>
            <?php if ($page->pageImages && count($page->pageImages) > 0): ?>
				<div class="content l-align-left t-margin pageimages">
					<section>
						<?php foreach($page->pageImages as $image): ?>
						<img src="<?= $image->url ?>">
						<?php endforeach; ?>
					</section>
				</div>
            <?php endif; ?>
        </div>
    </div>
	<?= $page->render('includes/footer.php') ; ?>
	<script src="/public/js/main.js"></script>
</body>
</html>