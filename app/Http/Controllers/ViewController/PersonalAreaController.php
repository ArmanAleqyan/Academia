<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Models\HistoryTariff;
use App\Models\InfoOnas;
use App\Models\Tariff;

use App\Models\User;
use App\Models\UserTarif;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonalAreaController extends Controller
{
    public function index(){
        $tarifs = Tariff::OrderBy('id','DESC')->get();
        $Contact_us = InfoOnas::all();
        $user = User::with('Tariff')->where('id',auth()->user()->id)->get();
        $ready_report = UserTarif::where('status',2)->where('user_id', auth()->user()->id)->get();


        if(!$ready_report->isEMpty()){

            if(!$user[0]->Tariff->isEmpty()){

                $product_id = $user[0]->Tariff[0]->tariff_id;
                $product_name = Tariff::where('id',  $product_id)->get();
                $s = $ready_report[0]->expiration_at;
                $date = strtotime($s);
                $time = $date - time();
                $day =  $time / 86400 ;
                $origin_day = floor($day ). "";
                return view('academia.personalarea',compact('Contact_us', 'tarifs', 'product_name', 'ready_report', 'origin_day'));
            }
        }

        $product_name = [];




//      dd($date);


       return view('academia.personalarea',compact('Contact_us', 'tarifs', 'product_name',  'ready_report'));
    }

    public function UserHistoryTariff(){
        $Contact_us = InfoOnas::all();
        $history =  HistoryTariff::with('tarif')->where('user_id', auth()->user()->id)->get();

        return view('academia.HistoryTariff',compact('Contact_us','history'));
    }
}
