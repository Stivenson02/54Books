<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;

class Send extends Model {

    public function city() {
        return $this->belongsTo(City::class);
    }

}
