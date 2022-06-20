<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company\Company;
use App\Models\Item\Item;

class PackageDetails extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'item_package_details';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'company_id',
        'items_id_package',
        'items_id',
    ];
    
     /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_id' => 'integer',
        'items_id_package' => 'integer',
        'items_id' => 'json',
    ];
    
    /**
     * Get the company that owns the package details.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    
    /**
     * Get the parent of package
     */
    public function itemParent(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'items_id_package', 'id');
    }
}
