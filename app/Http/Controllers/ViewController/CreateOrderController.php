<?php

namespace App\Http\Controllers\ViewController;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use App\Models\User;
use App\Models\UserTarif;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class CreateOrderController extends Controller
{

    public function allorder(){
        $order = UserTarif::with('user','tarif')->where('status',1)->orderBy('id','DESC')->get();
        return view('admin.orderFeedback.allOrderFeedback' , compact('order'));
    }

    public function adminSuccsesUserFeedback($id){


        $product = UserTarif::with('tarif')->where('id', $id)->get();

        $date = Carbon::now()->addDays($product[0]->tarif->term);

         $update = UserTarif::where('id',$id)->update([
             'status' => 2,
             'expiration_at' => $date
         ]);


         if ($update){
             return redirect()->back()->with('succses', 'succses');
         }
    }

    public function adminDeleteUserFeedback($id){
        $delete =UserTarif::where('id',$id)->delete();

        if($delete){
            return redirect()->back()->with('delete','delete');
        }
    }







    public function createorder(Request $request){


       $user_id = auth()->user()->id;
       $product = Tariff::where('id', $request->product_id)->get();

//        $date = Carbon::now()->addDays($product[0]->term);

       if(!$product->isEmpty()){
          $create = UserTarif::create([
              'user_id' => $user_id,
              'tariff_id' => $product[0]->id,
              'status' => 1,
              'ready_report' => 0,
//              'expiration_at' => $date
          ]);
       }

       if($create){
           return response()->json([
               'succses' => true,
               'message' => 'Вы удачно отправили заявку'
           ]);
       }else{
           return  response()->json([
               'error' => true
           ]);
       }
    }


    public function sendexelefile(Request $request){
        $exel = $request->sendexelefile;

        if($exel != null){
            $destinationPath =  'ExeleFile/'.Auth()->user()->name.'ExeleFile';
            $originalFile = time() . $exel->getClientOriginalName();
            $exel->move($destinationPath, $originalFile);
            $exel = $originalFile;
            $update = UserTarif::where('user_id', auth()->user()->id)->update([
                'file' => $exel,
                'filestatus' => 1
            ]);
            if($update){
                    return Redirect::to('personalarea/#ready_reports_upload_link')->with('succses','succses');
            }
        }




    }
}
