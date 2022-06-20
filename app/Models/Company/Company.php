<?php

namespace App\Models\Company;

use App\Models\Accounting\Account;
use App\Models\Accounting\Type;
use App\Models\Contact\Contact;
use App\Models\Contact\Group;
use App\Models\Item\Brand;
use App\Models\Item\Item;
use App\Models\Item\SellingPriceGroup;
use App\Models\Item\Unit;
use App\Models\Item\Variant\Variation;
use App\Models\Item\Warranty;
use App\Models\Order\Order;
use App\Models\Order\OrderDiscount;
use App\Models\Order\Purchase\Bill;
use App\Models\Order\Sales\Invoice;
use App\Models\Payment\PaymentMethod;
use App\Models\Publishing\Notification;
use App\Models\Publishing\Post;
use App\Models\Shipping\Logistic;
use App\Models\Shipping\LogisticService;
use App\Models\Warehousing\Warehouse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Company extends Model implements Auditable
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

    public $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'icon_path',
        'logo_path',
        'vat_number',
        'phone_number',
        'province',
        'city',
        'district',
        'sub_district',
        'zip_code',
        'address',
        'company_information',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'user_id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'icon_path' => 'string',
        'logo_path' => 'string',
        'vat_number' => 'string',
        'phone_number' => 'string',
        'province' => 'string',
        'city' => 'string',
        'district' => 'string',
        'sub_district' => 'string',
        'zip_code' => 'integer',
        'address' => 'text',
        'company_information' => 'string',
        'is_active' => 'boolean',
    ];


    /**
     * The attributes that should be cast.
     * @return HasOne
     */
    public function companySetting(): HasOne
    {
        return $this->hasOne(Setting::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function types(): HasMany
    {
        return $this->hasMany(Type::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function taxes(): HasMany
    {
        return $this->hasMany(Tax::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function contactGroups(): HasMany
    {
        return $this->hasMany(Group::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function brands(): HasMany
    {
        return $this->hasMany(Brand::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function warranties(): HasMany
    {
        return $this->hasMany(Warranty::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function units(): HasMany
    {
        return $this->hasMany(Unit::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function variations(): HasMany
    {
        return $this->hasMany(Variation::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function sellingPriceGroups(): HasMany
    {
        return $this->hasMany(SellingPriceGroup::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function logistics(): HasMany
    {
        return $this->hasMany(Logistic::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function logisticServices(): HasMany
    {
        return $this->hasMany(LogisticService::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function discounts(): HasMany
    {
        return $this->hasMany(OrderDiscount::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function paymentMethods(): HasMany
    {
        return $this->hasMany(PaymentMethod::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function bills(): HasMany
    {
        return $this->hasMany(Bill::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class, 'company_id', 'id');
    }

    /**
     * The attributes that should be cast.
     * @return HasMany
     */
    public function warehouses(): HasMany
    {
        return $this->hasMany(Warehouse::class, 'company_id', 'id');
    }

}
