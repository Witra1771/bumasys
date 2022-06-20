<?php

namespace App\Models\Accounting;

use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'accounting_accounts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'parent',
        'account_root',
        'is_group',
        'name',
        'accounting_type_id',
        'balance'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'company_id' => 'integer',
        'parent' => 'integer',
        'account_root' => 'string',
        'is_group' => 'boolean',
        'name' => 'string',
        'accounting_type_id' => 'integer',
        'balance' => 'integer'
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
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'accounting_type_id', 'id');
    }
}
