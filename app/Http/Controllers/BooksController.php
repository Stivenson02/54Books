<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Type;
use App\Subtype;
use App\Book;
use App\User;
use App\Pay;
use App\UserBook;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function create(Request $dates) {
        $plan = Pay::where('user_id', Auth::User()->id)->first();
        $subtype = Subtype::find($dates->catprins);

        $newbook = new Book();
        $newbook->name = $dates->name;
        $newbook->autor = $dates->autor;
        $newbook->editorial = $dates->editorial;
        $newbook->coste = $dates->coste;
        $newbook->code = time();
        $newbook->user_id = Auth::User()->id;
        $newbook->descuento = $dates->descuento;
        $newbook->one_subtype_id = $dates->catprins;
        $newbook->two_subtype_id = $dates->catsecond;
        $newbook->type_id = $subtype->type_id;
        $newbook->status = $plan->plan->status;
        $newbook->description = $dates->description;

        $file = $dates->file('image');
        $nombre = time() . '_' . $file->getClientOriginalName();
        $img1 = Image::make($file)->resize(250, 300)->stream();

        Storage::disk('local')->put('public/portada/' . $nombre, $img1);

        $newbook->cover_page = $nombre;

        if ($newbook->save()) {
            $registro = new UserBook();
            $registro->user_id = Auth::User()->id;
            $registro->book_id = $newbook->id;
            $registro->save();
        }
        return redirect()->route('book_publis_phat');
    }

}
