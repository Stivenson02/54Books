<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CarUser;
use App\Facture;
use App\Send;
use App\City;
use App\User;
use App\Book;

class FeatureController extends Controller {

    public function insertCar(Request $date) {

        $validateCar = Facture::where('user_id', Auth::User()->id)->where('status', 0)->orWhere('status', 1);
        if ($validateCar->exists()) {
            $infoFacture = $validateCar->first();
            $validateBook = CarUser::where('book_id', $date->book)->where('user_id', Auth::User()->id)
              ->where('status', 0)
              ->orWhere('status', 1);
            if ($validateBook->exists()) {
                $infoCar = CarUser::find($validateBook->first()->id);
                $infoCar->unit = $infoCar->unit + 1;
                $infoCar->pay = $infoCar->pay + $date->pay;
                $infoCar->save();
            } else {
                $car = new CarUser();
                $car->user_id = Auth::User()->id;
                $car->book_id = $date->book;
                $car->facture_id = $infoFacture->id;
                $car->pay = $date->pay;
                $car->status = 0;
                $car->unit = 1;
                $car->save();
            }
        } else {
            $facture = new Facture();
            $facture->status = 0;
            $facture->total_pay = 0;
            $facture->user_id = Auth::User()->id;
            if ($facture->save()) {
                $car = new CarUser();
                $car->user_id = Auth::User()->id;
                $car->book_id = $date->book;
                $car->facture_id = $facture->id;
                $car->pay = $date->pay;
                $car->status = 0;
                $car->unit = 1;
                $car->save();
            }
        }
        if ($date->go == 1) {
            return redirect()->route('detail_book_phat', ['id' => $date->book]);
        } else {
            return redirect()->route('show_car_phat');
        }
    }

    public function deleteCar($id) {
        $car = CarUser::find($id);
        if ($car->unit >= 2) {
            $car->unit = $car->unit - 1;
            $car->save();
        } else {
            $car->delete();
        }
        return redirect()->route('show_car_phat');
    }

    public function showCar() {
        $validatecar = CarUser::where('user_id', Auth::User()->id)
          ->where('status', 0)
          ->orWhere('status', 1);
        if ($validatecar->exists()) {
            $total = 0;
            $car = CarUser::where('user_id', Auth::User()->id)
              ->where('status', 0)
              ->orWhere('status', 1)
              ->get();
            foreach ($car as $detal) {
                $feature = Facture::find($detal->facture_id);
                $total = $detal->pay + $total;
                $feature->total_pay = $total;
                $feature->save();
            }
            $userFacture = Facture::where('user_id', Auth::User()->id)->first();
            return view('feature.car', ['car' => $car, 'facture' => $userFacture]);
        } else {
            return redirect('/');
        }
    }

    public function sendPay($facture) {
        $dateFacture = Facture::find($facture);
        $car = CarUser::where('facture_id', $dateFacture->id)->get();
        foreach ($car as $detal) {
            $statusCar = CarUser::find($detal->id);
            $statusCar->status = 1;
            $statusCar->save();
        }
        $dateFacture->status = 1;
        if ($dateFacture->save()) {
            $dateSend = Send::where('user_id', Auth::User()->id);
            if ($dateSend->exists()) {
                $send = $dateSend->first();
            } else {
                $newsend = new Send();
                $newsend->user_id = Auth::User()->id;
                $newsend->save();
                $send = Send::find($newsend->id);
            }
        }
        $city = City::orderBy('city', 'ASC')->get();
        return view('feature.send', ['send' => $send, 'cities' => $city, 'feature' => $dateFacture]);
    }

    public function SendPayU(Request $date) {
        $updateSend = Send::find($date->send);
        $updateSend->addres = $date->addres;
        $updateSend->phone = $date->phone;
        $updateSend->cell_phone = $date->cell_phone;
        $updateSend->city_id = $date->city;
        $updateSend->save();
        $facture = Facture::find($date->feature);
        $user = User::find(Auth::User()->id);
        return view('feature.payu', ['send' => $updateSend, 'facture' => $facture, 'user' => $user]);
    }

    public function SimulatePayBook(Request $date) {
        $facture = Facture::find($date->facture);
        $books = CarUser::where('facture_id', $facture->id)->get();
        foreach ($books as $value) {
            $car = CarUser::find($value->id);
            $car->status = 2;
            $car->save();
        }
        $facture->status = 2;
        $facture->save();
        return redirect()->route('book_feature_phat');
    }

}
