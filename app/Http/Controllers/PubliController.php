<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserBook;
use App\Pay;

class PubliController extends Controller {

    public function index() {
        $plan = Pay::where('user_id', Auth::User()->id)->first();
        return view('public.index', ['plan' => $plan]);
    }

    public function showBooks() {
        $public = UserBook::where('user_id', Auth::User()->id)->get();
        return view('public.bookshow', ['books' => $public]);
    }

}
