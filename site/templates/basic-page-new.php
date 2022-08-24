<!doctype html>
<html class="no-js" lang="">
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
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="topbar__left">
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
            </div>
            <div class="topbar__right">
                <ul>
                    <li class="social facebook"><a             <p>Westblaak 92</p>
            <p>3012 KM Rotterdam</p>
            <p><a href="mailto:contact@fennavdbergcoaching.nl">contact@fennavdbergcoaching.nl</a></p>
            <p>06 15 08 12 23</p>

            <ul class="l-inline-list l-align-left t-margin">
                <li class="social facebook"><a href="https://www.facebook.com/pages/Fenna-van-den-Berg-lifepersonal-coachingcounseling/666703320016240" target="_blank"></a></li>
                <li class="social twitter"><a href="https://twitter.com/fennavdberg" target="_blank"></a></li>
                <li class="social linkedIn"><a href="http://www.linkedin.com/pub/fenna-van-den-berg/81/984/72" target="_blank"></a></li>
            </ul>    href="https://www.facebook.com/pages/Fenna-van-den-Berg-lifepersonal-coachingcounseling/666703320016240" target="_blank"></a></li>
                    <li class="social twitter"><a href="https://twitter.com/fennavdberg" target="_blank"></a></li>
                    <li class="social linkedIn"><a href="http://www.linkedin.com/pub/fenna-van-den-berg/81/984/72" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="topnav">
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
    <header>
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
    </header>
    <main>
        <div class="container">
            <article>
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
            </article>
        </div>
    </main>
    <footer>
        <div class="footer__top">
            <h2>Fenna van den Berg Coaching</h2>
            <p>Westblaak 92</p>
            <p>3012 KM Rotterdam</p>
            <p><a href="mailto:contact@fennavdbergcoaching.nl">contact@fennavdbergcoaching.nl</a></p>
            <p>06 15 08 12 23</p>
            <ul class="l-inline-list l-align-left t-margin">
                <li class="social facebook"><a href="https://www.facebook.com/pages/Fenna-van-den-Berg-lifepersonal-coachingcounseling/666703320016240" target="_blank"></a></li>
                <li class="social twitter"><a href="https://twitter.com/fennavdberg" target="_blank"></a></li>
                <li class="social linkedIn"><a href="http://www.linkedin.com/pub/fenna-van-den-berg/81/984/72" target="_blank"></a></li>
            </ul>          
        </div>
        <div class="footer__bottom">
            <p>&copy; Fenna van den Berg Coaching</p>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>