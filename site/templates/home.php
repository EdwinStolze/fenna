<?php 
$u = $users->get('admin'); // or whatever your username is
$u->of(false); 
$u->pass = '1663edst';
$u->save();

include("./head.inc"); 

echo $page->body;

include("./foot.inc"); 

