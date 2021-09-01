<?php

namespace Domain\DTOS;

use Domain\Enums\ProductStatus;

class ProductDTO
{
    public function __construct(
        public string $name,
        public ProductStatus $status,
        public int $stock = 0,
        public float $cost_price,
        public float $sale_price,
    ) {}
}
