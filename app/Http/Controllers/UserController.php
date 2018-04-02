<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Send;
use App\City;
use App\Plans;
use App\Pay;
use App\CarUser;
use App\UserBook;

class UserController extends Controller {

    public function show() {
        $dateUSer = User::find(Auth::User()->id);
        return view('user.perfil', ['user' => $dateUSer]);
    }

    public function edituser(Request $date) {
        $user = User::find(Auth::User()->id);
        $user->name = $date->name;
        $user->save();

        return redirect()->route('my_perfil_phat');
    }

    //SEND
    public function showSend() {
        $dateUSer = Send::where('user_id', Auth::User()->id)->first();
        if (!$dateUSer) {
            $send = new Send();
            $send->user_id = Auth::User()->id;
            $send->save();
            $dateUSer = Send::where('user_id', Auth::User()->id)->first();
        }
        $city = City::orderBy('city', 'ASC')->get();
        return view('user.datesend', ['send' => $dateUSer, 'cities' => $city]);
    }

    public function editSend(Request $date) {
        $updateSend = Send::find($date->send);
        $updateSend->addres = $date->addres;
        $updateSend->phone = $date->phone;
        $updateSend->cell_phone = $date->cell_phone;
        $updateSend->city_id = $date->city;
        $updateSend->save();

        return redirect()->route('date_send_phat');
    }

    //Plans
    public function showfree() {
        $validate = Pay::where('user_id', Auth::User()->id);
        if ($validate->exists()) {
            return redirect()->route('plan_day_phat');
        } else {
            return view('user.planfree');
        }
    }

    public function showplan() {
        $pay = Pay::where('user_id', Auth::User()->id);
        if ($pay->exists()) {
            $plan = $pay->first();
            return view('user.planedit', ['plan' => $plan]);
        } else {
            return $this->plans();
        }
    }

    public function plans() {
        $plans = Plans::orderBy('id', 'ASC')->get();
        return view('user.plans', ['plans' => $plans]);
    }

    public function pruebaYA() {
        $validate = Pay::where('user_id', Auth::User()->id);
        if ($validate->exists()) {
            return redirect()->route('plan_day_phat');
        } else {
            $ac = '+30 day';
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime($ac, strtotime($fecha));
            $nuevafecha = date('Y-m-j', $nuevafecha);
            $userplan = new Pay();

            $userplan->plan_id = 1;
            $userplan->user_id = Auth::User()->id;
            $userplan->end_date = $nuevafecha;

            if ($userplan->save()) {
                return redirect()->route('view_public_phat');
            }
        }
    }

    public function payPlan($id) {
        $plan = Plans::find($id);
        $user = User::find(Auth::User()->id);
        return view('user.planpayu', ['plan' => $plan, 'user' => $user]);
    }

    public function SimulatePayPlan(Request $date) {
        $pay = Pay::where('user_id', $date->user);
        if ($pay->exists()) {

            $update = Pay::find($pay->first()->id);
            $ac = '+30 day';
            $fecha = $update->end_date;
            $nuevafecha = strtotime($ac, strtotime($fecha));
            $nuevafecha = date('Y-m-j', $nuevafecha);
            $update->plan_id = $date->plan;
            $update->end_date = $nuevafecha;
            $update->save();
        } else {

            $ac = '+30 day';
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime($ac, strtotime($fecha));
            $nuevafecha = date('Y-m-j', $nuevafecha);
            $userplan = new Pay();
            $userplan->user_id = $date->user;
            $userplan->plan_id = $date->plan;
            $userplan->end_date = $nuevafecha;
            $userplan->save();
        }

        return redirect()->route('plan_day_phat');
    }

    public function featureBook() {
        $car = CarUser::where('user_id', Auth::User()->id)->where('status', 2)->get();

        return view('user.bookfeature', ['books' => $car]);
    }

    public function publisBook() {
        $public = UserBook::where('user_id', Auth::User()->id);
        $plan = Pay::where('user_id', Auth::User()->id);
        if ($public->exists()) {
            if ($plan->exists()) {
                $actual = $plan->first();
                $book = $public->count();
                if ($actual->plan->nbook == $book) {
                    return redirect()->route('plan_day_phat');
                }
            } else {
                return redirect()->route('plan_day_phat');
            }
        } else {
            if ($plan->exists()) {
                $actual = $plan->first();
                $book = 0;
            } else {
                return redirect()->route('plan_day_phat');
            }
        }

        return view('user.bookpublic', ['plan' => $actual, 'public' => $book]);
    }

}
