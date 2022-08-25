<ul class="langswitch">
    <?php
        foreach($languages as $language) {
            if($language->id == $user->language->id) continue;
            if(!$page->viewable($language)) {
                $url = $pages->get("/")->localUrl($language);
            } else {
                $url = $page->localUrl($language);
            }
            $flag = file_get_contents('../assets/nederlands.svg'); 
            if ($language->name == 'en') {
                $flag = file_get_contents('../assets/english.svg');
            } 
            echo "<li><a href='$url'>{$flag}</a></li>";
        }
    ?>
</ul>
