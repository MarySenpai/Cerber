<?php
function get_products() {
	return [
		'1' => [
			'title' => 'Видеокамера 1',
			'desc' => 'Камера',
		],
		'2' => [
			'title' => 'Видеокамера 2',
			'desc' => 'Камераа',
		],
		'3' => [
			'title' => 'Видеокамера 3',
			'desc' => 'Камерааf',
		],
		'4' => [
			'title' => 'Видеокамера 4',
			'desc' => 'Камерааff',
		]		
	];
}

function get_product_attribute($id, $attr) {
	$products = get_products();
	$result = $products[$id][$attr] ?? null;
	return $result;
}

function get_product_title($id) {
	return get_product_attribute($id, 'title');
}

function get_product_desc($id) {
	return get_product_attribute($id, 'desc');
}

$url_category = 'http://cerber/page/catalog.php?category_id=';
$url_product = 'http://cerber/page/product.php?product_id=';
$id = $_GET['product_id'];
$title = get_product_title($id);
$desc = get_product_desc($id);