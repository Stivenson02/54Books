<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subtype;

class Type extends Model {

    public function subtipe() {
        return $this->hasMany(Subtype::class);
    }

}
