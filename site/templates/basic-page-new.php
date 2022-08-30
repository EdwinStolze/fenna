<!doctype html>
<html class="no-js" lang="nl">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="<?= $config->urls->templates ?>styles/main.css">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <meta name="theme-color" content="#fafafa">
</head>
<body>
    <div class="topbar">
        <div class="container">
            <div class="topbar__wrapper">
                <div class="topbar__left">
                    <?= $page->render('partials/langswitch.php'); ?>
                </div>
                <div class="topbar__right">
                    <?= $page->render('partials/socials.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <nav class="topnav">
        <?= $page->render('partials/navigation.php'); ?>
    </nav>
    <?= $page->render('partials/header.php'); ?>
    <main>
        <article class="container">
            <h1><?php echo $page->title ; ?></h1>
            <?php if ($page->intro) : ?>
                <div class="content__intro">
                    <?= $page->intro ; ?>
                </div>
            <?php endif ; ?>
            <div class="content__bodyOLD content">
                <?= $page->body ; ?>
            </div>
        </article>
    </main>
    <?= $page->render('partials/footer.php'); ?>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    </script>
    <script src="<?= $config->urls->templates ?>scripts/main.js"></script>
</body>
</html>