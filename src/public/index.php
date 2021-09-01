<?php

error_reporting(E_ERROR | E_PARSE);

require __DIR__.'/../../vendor/autoload.php';

$attributes = [
    'name' => 'new product',
    'status' => \Domain\Enums\ProductStatus::ACTIVE(),
    'stock' => 23,
    'cost_price' => 100,
    'sale_price' => 200,
];

$dto = new \Domain\DTOS\ProductDTO(...$attributes);

dd($dto);