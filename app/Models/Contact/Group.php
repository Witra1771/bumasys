<?php

namespace App\Models\Contact;

use App\Models\Company\Company;
use App\Models\Item\SellingPriceGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Group extends Model
{
    use HasFactory;

    public $table = 'contact_groups';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'name',
        'description',
        'selling_price_group_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'company_id' => 'integer',
        'name' => 'string',
        'description' => 'text',
        'selling_price_group_id' => 'integer',
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
    public function sellingPriceGroup(): BelongsTo
    {
        return $this->belongsTo(SellingPriceGroup::class, 'selling_price_group_id', 'id');
    }
}
