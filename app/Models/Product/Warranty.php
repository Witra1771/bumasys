<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Warranty extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
}
