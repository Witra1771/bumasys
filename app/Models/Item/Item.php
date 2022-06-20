<?php

namespace App\Models\Item;

use App\Models\Common\Category;
use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use OwenIt\Auditing\Contracts\Auditable;

class Item extends Model implements Auditable
{
    use HasFactory, SoftDeletes, Sluggable, \OwenIt\Auditing\Auditable;

    public $table = 'items';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public $fillable = [
        'company_id',
        'item_brand_id',
        'item_category_id',
        'item_sub_category_id',
        'item_warranty_id',
        'meta_tags',
        'slug',
        'name',
        'variant_combination',
        'description',
        'short_description',
        'weight',
        'is_active',
        'is_managed_stock',
        'image_path',
        'brochure_path',
        'item_type',
        'tags',
        'parent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_id' => 'integer',
        'item_brand_id' => 'integer',
        'item_category_id' => 'integer',
        'item_sub_category_id' => 'integer',
        'item_warranty_id' => 'integer',
        'meta_tags' => 'json',
        'slug' => 'string',
        'name' => 'string',
        'variant_combination' => 'json',
        'description' => 'text',
        'short_description' => 'string',
        'weight' => 'decimal',
        'is_active' => 'boolean',
        'is_managed_stock' => 'boolean',
        'image_path' => 'text',
        'brochure_path' => 'text',
        'item_type' => 'string',
        'tags' => 'json',
        'parent' => 'integer'
    ];

    /**
     * The attributes that should be cast.
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'item_brand_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'item_category_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return BelongsTo
     */
    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'item_sub_category_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return BelongsTo
     */
    public function warranty(): BelongsTo
    {
        return $this->belongsTo(Warranty::class, 'item_warranty_id', 'id');
    }
}
