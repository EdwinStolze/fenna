<?php
$flag = file_get_contents('../assets/nederlands.svg'); 
if ($user->language->name == 'en') {
    $flag = file_get_contents('../assets/english.svg');
}
if ($page->viewable($user->language)) {
    $url = $page->localUrl($user->language);
    echo "<a href='$url'>{$flag}</a>";
}