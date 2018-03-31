<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subtype;
use App\User;
use App\Type;

class Book extends Model {

    public function subtipeOne() {
        return $this->hasOne(Subtype::class, 'id', 'one_subtype_id');
    }

    public function subtipeTwo() {
        return $this->hasOne(Subtype::class, 'id', 'two_subtype_id');
    }

    public function tipe() {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function subtipeForce() {
        return $this->hasOne(Subtype::class, 'id', 'force_subtype_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
