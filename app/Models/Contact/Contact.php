<?php

namespace App\Models\Contact;

use App\Models\Company\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Contact extends Model
{
    use HasFactory;

    public $table = 'contacts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'company_id',
        'is_can_login',
        'is_active',
        'is_verified',
        'contact_type',
        'is_individual',
        'name',
        'phone_number',
        'email',
        'province',
        'city',
        'district',
        'sub_district',
        'zip_code',
        'address',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'user_id' => 'integer',
        'company_id' => 'integer',
        'is_can_login' => 'boolean',
        'is_active' => 'boolean',
        'is_verified' => 'boolean',
        'contact_type' => 'string',
        'is_individual' => 'boolean',
        'name' => 'string',
        'phone_number' => 'integer',
        'email' => 'string',
        'province' => 'string',
        'city' => 'string',
        'district' => 'string',
        'sub_district' => 'string',
        'zip_code' => 'integer',
        'address' => 'text',
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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
