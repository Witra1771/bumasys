<?php

namespace App\Traits\Common;

trait AddressService {

    function __construct()
    {
//        $this->middleware(['auth','verified']);
    }

   public function getProvince(){
       return json_decode(file_get_contents(resource_path() . "/common/address/provincy_list.json"), true);
   }

   public function getCities($provinceID){
       return json_decode(file_get_contents(resource_path() . "/common/address/provincies/".$provinceID.".json"), true);
   }

   public function getDistrict($provinceId, $cityID){
       return json_decode(file_get_contents(resource_path() . "/common/address/district/".$cityID.".json"), true);
   }

   public function getSubDistrict($provinceId, $cityID, $districtName): array
   {
       $jsonDistrict = json_decode(file_get_contents(resource_path() . "/common/address/district/".$cityID.".json"), true);
       $districtsCollection = collect($jsonDistrict);

       $filteredDistricts = $districtsCollection->filter(function ($value, $key) use ($districtName) {
           return $value['kecamatan'] == $districtName;
       });

       return $filteredDistricts->all();
   }
}
