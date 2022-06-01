<?php

namespace App\Repositories\Product;

use Illuminate\Http\Request;
use App\Interfaces\Product\ProductRepositoryInterface;
use App\Models\Product\Product;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAllProduct()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function deleteProduct($id)
    {
        Product::destroy($id);
    }
    public function createProduct(array $request)
    {
        return Product::create($request);
    }

    public function updateProduct($id, array $request)
    {
        return Product::whereId($id)->update($request);
    }

    public function getAllProductonSale()
    {
        return Product::where('is_sale', true);
    }

    public function getAllProductonNotSale()
    {
        return Product::where('is_sale', false);
    }
}
