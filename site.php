<?php

use \Hcode\Page;


$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

/////////////////////////////// =========================== ///////////////////////////

$app->get("/products", function() {

	$page = new Page();

	$page->setTpl("products");

});

/////////////////////////////// =========================== ///////////////////////////

?>