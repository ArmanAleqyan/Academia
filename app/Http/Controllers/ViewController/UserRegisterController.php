<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\SendMail;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserRegisterController extends Controller
{

    public function register(RegisterRequest $request){


       if ($request->checkbox == true){
           $random = random_int('100000', '999999');

           $data = [
               'name' => $request->name,
               'email' => $request->email,
               'verify' =>  $random,
               'jobtitle' => $request->jobtitle,
               'city' => $request->city,
               'password' => Hash::make($request->password),
               'phone' => $request->phone,
               'role_id' => 1,
           ];

           $createUser = User::create($data);


         if($createUser){

          $login =    Auth::attempt($request->only(['email', 'password']));
             $details = [
                 'email' =>$request->email,
                 'kod' => $random
             ];
             Mail::to($request->email)->send(new SendMail($details));
             return response()->json([
                 'succses' => true,

                 ]);
             }else
                 response()->json([
                 'error' => true
         ]);

       }else{
      return Response()->json([
          'checkboxerror' => true
      ]);
       }
    }

    public function registercode(Request $request){


        $user = User::where('verify', $request->registercode)->get();
        if(!$user->isEmpty()){
            $user = User::where('verify', $request->registercode)->update([
                'verify' => '1',
            ]);
            return response()->json([
                'succses' => true,
                'message' => 'Вы успешно зарегистрировались'
            ]);
        }else{
            return response()->json([
//                'error' => true,
                'message' => 'Неправильный код подтверждения',
            ],422);
        }
    }


    public function doubleregistercode(Request $request){

        $random = random_int('100000', '999999');
        $user = User::where('id',auth()->user()->id )->update([
            'verify' => $random,
        ]);

        $details = [
            'email' =>auth()->user()->email,
            'kod' => $random
        ];
        Mail::to(auth()->user()->email)->send(new SendMail($details));


        return response()->json([
            'succses' => true,
        ]);



    }
}
