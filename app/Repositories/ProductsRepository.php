<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\ProductsRepositoryInterface;
use App\Models\Product\Products;

class ProductsRepository implements ProductsRepositoryInterface
{

    public function getAllProducts()
    {
        return Products::all();
    }

    public function getProductById($id)
    {
        return Products::findOrFail($id);
    }

    public function deleteProduct($id)
    {
        Products::destroy($id);
    }
    public function createProduct(array $request)
    {
        return Products::create($request);
    }

    public function updateProduct($id, array $request)
    {
        return Products::whereId($id)->update($request);
    }

    public function getAllProductsonSale()
    {
        return Products::where('is_sale', true);
    }

    public function getAllProductsonNotSale()
    {
        return Products::where('is_sale', false);
    }
}
