<?php

namespace App\Interfaces;

interface ProductsRepositoryInterface
{
    public function getAllProducts();
    public function getProductById($productId);
    public function deleteProduct($productId);
    public function createProduct(array $request);
    public function updateProduct($productId, array $request);
    public function getAllProductsonSale();
    public function getAllProductsonNotSale();
}
