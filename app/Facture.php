<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CarUser;

class Facture extends Model
{
      public function book() {
        return $this->hasMany(CarUser::class);
    }
}
