<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Interfaces\Product\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
         return response()->json([
            'data' => $this->productRepository->getAllProduct()
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreProductRequest $request)
    public function store(Request $request): JsonResponse
    {
        $productRepository = $request->only([
            'client',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->productRepository->createProduct($productRepository)
            ],
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $Product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $Product): JsonResponse
    public function show(Request $request): JsonResponse
    {
        $productId = $request->route('id');

        return response()->json([
            'data' => $this->productRepository->getProductById($productId)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product\Product  $Product
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProductRequest $request, Product $Product)
    public function update(Request $request): JsonResponse
    {
        $productId = $request->route('id');
        $productDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->productRepository->updateProduct($productId, $productDetails)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $Product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $Product)
    public function destroy(Request $request): JsonResponse
    {
        $productId = $request->route('id');
        $this->orderRepository->deleteOrder($productId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
