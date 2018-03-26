<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Subtype extends Model {

    public function tipe() {
        return $this->belongsTo(Type::class,'type_id');
    }

}
