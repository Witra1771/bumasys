<?php

namespace App\Models\Company;

use App\Models\Item\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Setting extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    public $table = 'company_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'date_format',
        'time_format',
        'time_zone',
        'currencies',
        'ccy_symbol',
        'ccy_symbol_plcmt',
        'trx_editable_type',
        'trx_editable_by_days',
        'trx_editable_by_status',
        'item_sku_prefix',
        'item_default_unit_id',
        'invoice_format',
        'billing_format',
        'payment_format',
        'def_acc_sale_id',
        'def_acc_purchase_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'company_id' => 'integer',
        'date_format' => 'string',
        'time_format' => 'string',
        'time_zone' => 'string',
        'currencies' => 'string',
        'ccy_symbol' => 'string',
        'ccy_symbol_plcmt' => 'string',
        'trx_editable_type' => 'string',
        'trx_editable_by_days' => 'integer',
        'trx_editable_by_status' => 'string',
        'item_sku_prefix' => 'string',
        'item_default_unit_id' => 'integer',
        'invoice_format' => 'json',
        'billing_format' => 'json',
        'payment_format' => 'json',
        'def_acc_sale_id' => 'integer',
        'def_acc_purchase_id' => 'integer',
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
    public function item(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'item_default_unit_id', 'id');
    }
}
