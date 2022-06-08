<?php

namespace App\Traits\Product;

trait ProductScopeService {
    /**
     * Scope a query to only user products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMyProduct($query, $CompaniesID): \Illuminate\Database\Eloquent\Builder
    {
        $query = $query->where('company_id', $CompaniesID);
        return $query;
    }

    /**
     * Scope a query to only user product for sale.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForSale($query, $CompaniesID): \Illuminate\Database\Eloquent\Builder
    {
        $query = $query->where('company_id', $CompaniesID)->where('is_sale', true);
        return $query;
    }

     /**
     * Scope a query to only user product not for sale.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotSale($query, $CompaniesID): \Illuminate\Database\Eloquent\Builder
    {
        $query = $query->where('company_id', $CompaniesID)->where('is_sale', true);
        return $query;
    }

    /**
     * Scope a query to only on sale product.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAllForSale($query): \Illuminate\Database\Eloquent\Builder
    {
        $query = $query->where('is_sale', true);
        return $query;
    }

    /**
     * Scope a query to only not for sale product.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAllNotSale($query): \Illuminate\Database\Eloquent\Builder
    {
        $query = $query->where('is_sale', false);
        return $query;
    }
}
