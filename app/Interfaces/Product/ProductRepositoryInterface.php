<?php

namespace App\Interfaces\Product;

interface ProductRepositoryInterface
{
    public function getAllProduct();
    public function getProductById($productId);
    public function deleteProduct($productId);
    public function createProduct(array $request);
    public function updateProduct($productId, array $request);
    public function isPackageProduct($productId);
}
