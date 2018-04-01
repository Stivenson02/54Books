<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plans;
use App\User;

class Pay extends Model {

    public function plan() {
        return $this->belongsTo(Plans::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
