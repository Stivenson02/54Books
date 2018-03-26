<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Subtype;
use App\Book;
use App\User;

class BooksController extends Controller {

    public function Subtype($id) {
        $type = Type::find($id);
        $books = Book::all();
        return view('subtype', ['type' => $type, 'subtype' => $type->subtipe, 'books' => $books]);
    }

}
