<?php

namespace App\Traits\Common;

trait CurrenciesService {
    public function getCurrency(){
        return json_decode(file_get_contents(resource_path() . "/common/currencies.json"), true);
    }
}
