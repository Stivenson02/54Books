<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pay;


class Plans extends Model {

    public function pay() {
        return $this->hasOne(Pay::class);
    }

}
