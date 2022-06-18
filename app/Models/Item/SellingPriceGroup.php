<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SellingPriceGroup extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
}
