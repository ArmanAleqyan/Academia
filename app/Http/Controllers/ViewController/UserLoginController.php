<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordUpdateRequest;
use App\Http\Requests\ForgotUpdatePasswordRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Mail\SendMail;
use App\Models\NewEmailUpdate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserLoginController extends Controller
{
    public function userlogin(UserLoginRequest $request){

        $user = $request->only(['email','password']);
        $login =  auth()->attempt($user);
        if($login){
            return response()->json([
                'succses' => true,
            ],200);
        }else{
            return response()->json([
//                'error' => true,
                'message' => 'Неправильный логин или пароль',
            ],422);
        }
    }

    public function userlogout(){
        auth::logout();

        return redirect()->route('Userhome');
    }


    public function updatepasswordcode(Request $request){

            $random = random_int('100000', '999999');
                $useremail = User::where('email', $request->email)->update([
                    'passwordchangecode' => $random
                ]);


                if($useremail){
                    $details = [
                        'email' =>$request->email,
                        'kod' => $random
                    ];
                    Mail::to($request->email)->send(new SendMail($details));
                    return response()->json([
                        'succses' => true,
                    ],200);
                }else{
                    return response()->json([
                        'message' => 'Такая Эл.почта не существует',
                    ],422);
                }
    }

    public function resetpasswordcode(Request $request){

        $user = User::where('passwordchangecode' ,$request->resetpasswordcodeasdssss)->update([
            'passwordchangecode' => 1
        ]);
        if ($user){
            return response()->json([
                'succses' => true,
            ],200);
        }else{
            return response()->json([
                'message' => 'Неправильный код подтверждения',
            ],422);
        }
    }

    public function updatepassword(UserUpdatePasswordRequest $request){


        $updatepassword = User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->updatepassword)
        ]);
        if($updatepassword){
            return response()->json([
                'succses' => true,
                'message' => 'Вы успешно изменили пароль'
            ],200);
        }else{
            return response()->json([
               'error' => true,
//                'message' => 'Неправильный логин или пароль',
            ],422);
        }
    }


    public function updateemailold(Request $request){
        $email = User::where('email',$request->email)->get();
        if(!$email->isEmpty()){
            return response()->json([
                'succses' => true,
            ],200);
        }else{
            return response()->json([
                'error' => true,
                'message' => 'Эл.почта не существует',
            ],422);
        }
    }

    public function newemailsendcode(Request $request){
          $random = random_int('100000','999999');

          $firstnewemail = User::where('email',$request->newemail)->first();

        if($firstnewemail == null){
            $details = [
                'email' =>$request->newemail,
                'kod' => $random
            ];
            Mail::to($request->newemail)->send(new SendMail($details));
            if( $details){
                $create = NewEmailUpdate::create([
                    'user_id' => auth()->user()->id,
                    'email' => $request->newemail,
                    'veryfi' => $random
                ]);
                return response()->json([
                    'succses' => true,
                ],200);
            }
        }else{
            return response()->json([
                'error' => true,
                'message' => 'Эл.почта уже существует',
            ],422);
        }


    }

    public function newemailveryfi(Request $request){


        $newemailcode = NewEmailUpdate::where('veryfi', $request->resetpasswordcode)->get();
        if(!$newemailcode->isEMpty()){
            $user = User::where('id', Auth::user()->id)->update([
                'email' => $newemailcode[0]->email
            ]);
            NewEmailUpdate::where('user_id', auth()->user()->id)->delete();
            return response()->json([
                'succses' => true,
                'message' => 'Вы удачно обновили вашу Эл.почту'
            ],200);
        }

           return response()->json([
               'error' => true,
               'message' => 'Неправильный код подтверждения',
           ],422);
    }

    public function forgoutpassword(Request $request){

        $random = random_int('100000' , '999999');
        $user = User::where('email',$request->forgotemail)->get();
      if(!$user->isEmpty()){
          $update = User::where('email',$request->forgotemail)->update([
          'passwordchangecode' =>$random
       ]);
          if($update){
              Cookie::queue('email',$request->forgotemail,14447897987987987897987987987);
              $details = [
                  'email' =>$request->forgotemail,
                  'kod' => $random
              ];
              Mail::to($request->forgotemail)->send(new SendMail($details));
              return response()->json([
                  'succses' => true,
              ],200);
          }else{
              return response()->json([
                  'error' => true,
                  'message' => 'Неправильная Эл.почта',
              ],422);
          }

      }else{
          return response()->json([
              'error' => true,
              'message' => 'Неправильная Эл.почта',
          ],422);
      }
    }

    public function forgotpasswordcode(Request $request){

        $user = User::where('passwordchangecode', $request->code)->get();
        if(!$user->isEMpty()){
            Cookie::queue('code',$request->code,14447897987987987897987987987);
            return response()->json([
                'succses' => true,
            ],200);

        }else{
            return response()->json([
                'message' => 'Неправильный код подтверждения',
            ],422);
        }
    }

    public function forgotpasswordnewpassword_form(ForgotUpdatePasswordRequest $request){
          $cookie =    Cookie::get('code');
           $user = User::where('passwordchangecode',$cookie )->update([
               'password' => Hash::make($request->forgotnewpassword) ,
               'passwordchangecode' => 1
           ]);
           if($user){
               return response()->json([
                   'succses' => true,
                   'message' => 'Пароль успешно восстановлён'
               ],200);
           }else{
               return response()->json([
                   'error' => true,
               ],422);
           }
    }

    public function sendtwocodeforgotpassword(){
        $cookie =    Cookie::get('email');
        $random = random_int('100000', '999999');
        $update = User::where('email',$cookie)->update([
            'passwordchangecode' => $random
        ]);

        $details = [
            'email' =>$cookie,
            'kod' => $random
        ];
        Mail::to($cookie)->send(new SendMail($details));

    }
}
