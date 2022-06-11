<?php

namespace App\Traits\Product;

use Illuminate\Database\Eloquent\Builder;

trait ProductScopeService {
    /**
     * Scope a query to only user products.
     *
     * @param Builder $query
     * @param $CompaniesID
     * @return Builder
     */
    public function scopeMyProduct($query, $CompaniesID): Builder
    {
        return $query->where('company_id', $CompaniesID);
    }

    /**
     * Scope a query to only user product for sale.
     *
     * @param Builder $query
     * @param $CompaniesID
     * @return Builder
     */
    public function scopeForSale($query, $CompaniesID): Builder
    {
        return $query->where('company_id', $CompaniesID)->where('is_sale', true);
    }

    /**
     * Scope a query to only user product not for sale.
     *
     * @param Builder $query
     * @param $CompaniesID
     * @return Builder
     */
    public function scopeNotSale($query, $CompaniesID): Builder
    {
        return $query->where('company_id', $CompaniesID)->where('is_sale', true);
    }

    /**
     * Scope a query to only on sale product.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeAllForSale($query): Builder
    {
        return $query->where('is_sale', true);
    }

    /**
     * Scope a query to only not for sale product.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeAllNotSale($query): Builder
    {
        return $query->where('is_sale', false);
    }
}
