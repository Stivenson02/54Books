<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Type;
use App\Subtype;
use App\Book;
use App\User;

class BooksController extends Controller {

    public function Subtype($id) {
        $type = Type::find($id);
        $books = Book::where('type_id', $type->id)->orderBy('status', 'desc')->get();
        $relationBooks = Book::where('type_id', $id)->where('status', '>', 2)->inRandomOrder()->limit(20)->get();

        return view('books.subtype', ['type' => $type, 'subtype' => $type->subtipe, 'books' => $books, "relationBook" => $relationBooks]);
    }

    public function Detail($id_book) {
        $book = Book::find($id_book);
        if ($book) {
            $type_one = Subtype::find($book->one_subtype_id);
            $relationBooks = Book::where('status', '>', 1)
                ->where('one_subtype_id', $book->one_subtype_id)
                ->orWhere('two_subtype_id', $book->one_subtype_id)
                ->inRandomOrder()->limit(20)->get();

            return view('books.detail', ['book' => $book, 'typeOne' => $type_one, "relationBook" => $relationBooks]);
        } else {
            return redirect('/404');
        }
    }

    public function filterSubtipe(Request $date) {

        $type = Type::find($date->type);
        $books = Book::orderBy('status', 'desc')->get();
        $relationBooks = Book::where('type_id', $date->type)->where('status', '>', 1)->inRandomOrder()->limit(20)->get();

        return view('books.filtersubtype', ['type' => $type, 'subtype' => $type->subtipe, 'books' => $books, "relationBook" => $relationBooks, "filter" => $date['skills']]);
    }

    public function imageBook($id) {
        $book = Book::find($id);
        $perfil = Storage::disk('local')->get('public/portada/' . $book->cover_page);
        return response($perfil, 200);
    }

}
