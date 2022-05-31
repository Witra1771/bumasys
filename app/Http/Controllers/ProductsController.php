<?php

namespace App\Http\Controllers;

use App\Models\Product\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    private ProductsRepositoryInterface $productsRepository;

    public function __construct(ProductsRepositoryInterface $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
         return response()->json([
            'data' => $this->productsRepository->getAllProducts()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreProductsRequest $request)
    public function store(Request $request): JsonResponse
    {
        $productsRepository = $request->only([
            'client',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->productsRepository->createProduct($productsRepository)
            ],
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Products  $products
     * @return \Illuminate\Http\Response
     */
    // public function show(Products $products): JsonResponse
    public function show(Request $request): JsonResponse
    {
        $productId = $request->route('id');

        return response()->json([
            'data' => $this->productsRepository->getProductById($productId)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Product\Products  $products
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProductsRequest $request, Products $products)
    public function update(Request $request): JsonResponse
    {
        $productId = $request->route('id');
        $productDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->productsRepository->updateProduct($productId, $productDetails)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Products  $products
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Products $products)
    public function destroy(Request $request): JsonResponse
    {
        $productId = $request->route('id');
        $this->orderRepository->deleteOrder($productId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
