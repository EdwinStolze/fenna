<?php
// $out = "<ul class=\"dropdown menu\" data-dropdown-menu>";
$out = "<ul class=\"vertical menu accordion-menu\" data-accordion-menu>";
$homePage = $pages->get('/')->url ;
$class = $page ===  $pages->get('/') ? 'class="is-active"' : ""; 
$out .= "<li><a {$class} href='{$homePage}'>home</a></li>";
foreach ($pages->get('/')->children as $child ) {
    $class = $page === $child ? 'class="is-active"' : ""; 
    $out .= "<li><a {$class} href='{$child->url}'>{$child->title}</a>";
    if ($child->numChildren) {
        // $out .= "<ul class='menu'>";
        $out .= "<ul class=\"menu vertical nested\">";
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