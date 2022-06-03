<?php

namespace App\Traits\Product;

use App\Models\Product\Variation;

trait ProductScopeService {
    public function scopeMyProduct($query, $CompaniesID){
        $query = $query->where('company_id', $CompaniesID);
        return $query;
    }

    public function scopeOnSale($query){
        $query = $query->where('is_sale', true);
        return $query;
    }

    public function scopeNotSale($query){
        $query = $query->where('is_sale', false);
        return $query;
    }
}
