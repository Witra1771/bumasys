<?php

namespace App\Traits\Common;

trait CurrenciesService {
    function __construct()
    {
//        $this->middleware(['auth','verified']);
    }

    public function getCurrency(){
        return json_decode(file_get_contents(resource_path() . "/common/currencies.json"), true);
    }
}
