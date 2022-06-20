<?php

namespace App\Models\Common;

use App\Models\Item\Item;
use App\Models\Publishing\Notification;
use App\Models\Publishing\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class Category extends Model implements Auditable
{
    use HasFactory, Sluggable, \OwenIt\Auditing\Auditable;

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

    public $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'is_system',
        'company_id',
        'meta_tags',
        'category_type',
        'slug',
        'name',
        'image_path',
        'category_code',
        'description',
        'parent',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_system' => 'integer',
        'company_id' => 'integer',
        'meta_tags' => 'json',
        'category_type' => 'string',
        'slug' => 'string',
        'name' => 'string',
        'image_path' => 'string',
        'category_code' => 'string',
        'description' => 'string',
        'parent' => 'integer',
    ];

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'category_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'category_id', 'id');
    }
}
