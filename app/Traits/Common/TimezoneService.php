<?php

namespace App\Traits\Common;

trait TimezoneService {
    public function getTimezone(){
        return json_decode(file_get_contents(resource_path() . "/common/timezone.json"), true);
    }
}
