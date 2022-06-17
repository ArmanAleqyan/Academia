<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Mail\submityourapplicationMail;
use App\Mail\UznatyOvasMail;
use App\Models\Comand;
use App\Models\CustomerReviews;
use App\Models\Drugoe;
use App\Models\InfoOnas;
use App\Models\kmandnayarabota;
use App\Models\Partner;
use App\Models\primeriotchota;
use App\Models\SaitContent;
use App\Models\SistemaOcenki;
use App\Models\Tariff;
use App\Models\Tarifi;
use App\Models\TeamAudioContent;
use App\Models\ViberayutNas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class UserHomeController extends Controller
{
    public function index(){


    $content_header = SaitContent::all();
    $result = SistemaOcenki::all();
    $comand_content = Comand::all();
    $team_audio_content = TeamAudioContent::OrderBy('id','DESC')->get();
    $choose_us = ViberayutNas::all();
    $tarifs_content = Tarifi::all();
    $tarifs = Tariff::OrderBy('id','DESC')->get();
    $partners = Partner::OrderBy('id','DESC')->get();
    $comandnayarabota = kmandnayarabota::all();
    $exaple_otchota = primeriotchota::all();
    $other = Drugoe::all();
    $costumer_revius = CustomerReviews::OrderBY('id', 'DESC')->get();
    $Contact_us = InfoOnas::all();
        return view('academia.home',compact(
            'content_header', 'result' , 'comand_content', 'team_audio_content', 'choose_us', 'tarifs_content', 'tarifs',
            'partners' , 'comandnayarabota','exaple_otchota' , 'other', 'costumer_revius', 'Contact_us'));
    }

    public function xotiteuznaty(Request $request){
        $email = InfoOnas::all();


        $details = [
            'name' =>$request->name,
            'email' => $request->email
        ];
        Mail::to($email[0]->email)->send(new UznatyOvasMail($details));
        return Redirect::to('/#leave_a_request')->with('sucsses','sucsses');
    }

    public function submityourapplication(Request $request){
        $email = InfoOnas::all();





        if($request->checkbox == 'on'){
            if($request->message){
                $details = [
                    'name' =>$request->name,
                    'phone' => $request->phone,
                    'city' => $request->city,
                    'message' => $request->message
                ];
            }else{
                $details = [
                    'name' =>$request->name,
                    'phone' => $request->phone,
                    'city' => $request->city
                ];
            }

            $send = Mail::to($email[0]->email)->send(new submityourapplicationMail($details));

            if($send){
                return response()->json([
                    'succses' => true,
                    'message' => 'Вы удачно отправили заявку'
                ]);
            }else{
                return  response()->json([
                    'error' => true
                ]);
            }
        }else{

            return response()->json([
                'error' => true,
                'message' => 'error'
            ]);
        }

    }
}



