<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\Facture;

class CarUser extends Model {

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function facture() {
        return $this->belongsTo(Facture::class);
    }

}
