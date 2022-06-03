<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Product\ProductScopeService;

class Product extends Model
{
    use HasFactory, SoftDeletes, ProductScopeService;

    public $table = 'products';

    public $fillable = [
        'company_id',
        'is_package',
        'list_product_id',
        'name',
        'sku',
        'product_units_id',
        'product_brands_id',
        'product_categories_id',
        'product_sub_categories_id',
        'product_warranties_id',
        'weight',
        'is_sale',
        'is_managed_stock',
        'alert_quantity',
        'description',
        'image_path',
        'brochure_path',
        'product_type',
        'variants',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_id' => 'integer',
        'is_package' => 'boolean',
        'list_product_id' => 'array',
        'name' => 'string',
        'sku' => 'string',
        'product_units_id' => 'integer',
        'product_brands_id' => 'integer',
        'product_categories_id' => 'integer',
        'product_sub_categories_id' => 'integer',
        'product_warranties_id' => 'integer',
        'weight' => 'double',
        'is_sale' => 'boolean',
        'is_managed_stock' => 'boolean',
        'alert_quantity' => 'integer',
        'description' => 'string',
        'image_path' => 'string',
        'brochure_path' => 'string',
        'product_type' => 'string',
        'variants' => 'array',
        'created_by' => 'string',
        'updated_by' => 'string',
        'deleted_by' => 'string'
    ];

    public function unit(): HasOne
    {
        return $this->hasOne(Unit::class, 'product_units_id', 'id');
    }

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class, 'product_brands_id', 'id');
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'product_categories_id', 'id');
    }

    public function subCategory(): HasOne
    {
        return $this->hasOne(Category::class, 'product_sub_categories_id', 'id');
    }

    public function warranty(): HasOne
    {
        return $this->hasOne(Warranty::class, 'product_warranties_id', 'id');
    }
}
