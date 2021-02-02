<?php 

function showProduct($array) {
    include($_SERVER['DOCUMENT_ROOT'] . '/templates/productList.php');
}


$json = file_get_contents('product.json');
$data = json_decode($json, JSON_PRETTY_PRINT);
$products = $data['product'];
