<?php
$out = "<ul class='navigation'>";
$homePage = $pages->get('/')->url ;
$class = $page ===  $pages->get('/') ? 'class="is-active"' : ""; 
$out .= "<li><a {$class} href='{$homePage}'>home</a></li>";
foreach ($pages->get('/')->children as $child ) {
    $class = $page === $child ? 'class="is-active"' : ""; 
    $out .= "<li><a {$class} href='{$child->url}'>{$child->title}</a>";
    if ($child->numChildren) {
        $out .= "<ul>";
        foreach ($child->children as $grandchild ) {
            $class = $child === $grandchild ? 'class="is-active"' : ""; 
            $out .= "<li><a {$class} href='{$grandchild->url}'>{$grandchild->title}</a></li>";
        }
        $out .= "</ul></li>";
    } else {
        $out .= "</li>";
    }
}
echo $out;