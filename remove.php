<?php

if(isset($_GET['id'])) {
	$items = file('catalog.csv');
	array_splice($items, $_GET['id'], 1);
	file_put_contents('catalog.csv', $items);
}

header('Location: /bogdan/');