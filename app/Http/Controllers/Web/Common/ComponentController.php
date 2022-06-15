<?php

namespace App\Http\Controllers\Web\Common;

use App\Traits\Common\AddressService;
use App\Traits\Common\CurrenciesService;
use App\Traits\Common\TimezoneService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class ComponentController extends Controller
{
    use AddressService, CurrenciesService, TimezoneService;

    /**
     * Display a listing of the province resource.
     *
     * @return Collection
     */
    public function provinces(): Collection
    {
        return collect($this->getProvince())->prepend(__('component.prepend_province'), "");
    }

    /**
     * Display a listing of the cities resource.
     *
     * @param $provinceId
     * @return Collection
     */
    public function cities($provinceId): Collection
    {
        return collect($this->getCities($provinceId))->prepend(__('component.prepend_city'), "");
    }

    /**
     * Display a listing of the district/sub district/zip code resource.
     *
     * @param $provinceId
     * @param $cityId
     * @return Collection
     */
    public function districts($provinceId, $cityId): Collection
    {
        $districts = collect($this->getDistrict($provinceId, $cityId))->pluck('kecamatan')->prepend(__('component.prepend_district'), "")->toArray();
        $districts = array_unique($districts);
        return collect($districts);
    }

    /**
     * Display a listing of the district/sub district/zip code resource.
     *
     * @param $provinceId
     * @param $cityId
     * @param $districtName
     * @return Collection
     */
    public function subDistricts($provinceId, $cityId, $districtName): Collection
    {
        return collect($this->getSubDistrict($provinceId, $cityId, $districtName))->pluck('kelurahan', 'kodepos')->prepend(__('component.prepend_sub_district'), "");
    }

    /**
     * @return Collection
     */
    public function currencies(): Collection
    {
        return collect($this->getCurrency())->prepend(__('component.prepend_currency'), "");
    }

    /**
     * @return Collection
     */
    public function timezones(): Collection
    {
        return collect($this->getTimezone())->prepend(__('component.prepend_timezone'), "");
    }
}
