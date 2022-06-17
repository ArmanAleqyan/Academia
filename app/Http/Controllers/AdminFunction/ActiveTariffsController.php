<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Models\HistoryTariff;
use App\Models\UserTarif;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActiveTariffsController extends Controller
{
     public function allTariff(){
         $order = UserTarif::where('status',2)->orderBy('id','DESC')->get();

         return view('admin.ActiveTariff.allActiveTariff' ,compact('order'));
     }

     public function deleteActiveTariff($id){

         $delete = UserTarif::where('id',$id)->delete();

         if($delete){
             return redirect()->back()->with('delete','delete');
         }
     }


     public function updateActiveTariff($id){
         $activeOrder =  UserTarif::with('user','tarif')->where('id',$id)->get();
         return view('admin.ActiveTariff.OneActiveTariff', compact('activeOrder'));
     }


     public function updateAdminActiveTariff(Request $request){



         $senddogovorfile = $request->senddogovorfile;
         $exel = $request->sendexelefile;

         $product = UserTarif::where('id',$request->product_id)->get();

         if($senddogovorfile != null){
             $destinationPath =  'ExeleFile/'.$product[0]->user->name.'ExeleFile';
             $originalFile = time() . $senddogovorfile->getClientOriginalName();
             $senddogovorfile->move($destinationPath, $originalFile);
             $senddogovorfile = $originalFile;
             $update = UserTarif::where('user_id', $product[0]->user->id)->update([
                 'Treaty' => $senddogovorfile,
             ]);
         }


         if($exel != null){
             $destinationPath =  'ExeleFile/'.$product[0]->user->name.'ExeleFile';
             $originalFile = time() . $exel->getClientOriginalName();
             $exel->move($destinationPath, $originalFile);
             $exel = $originalFile;
             $update = UserTarif::where('user_id', $product[0]->user->id)->update([
                 'file' => $exel,
             ]);

         }




         $old_count =  $product[0]->ready_report;
         $new_count = $old_count + $request->count;
         $update = UserTarif::where('id',$request->product_id)->update([
             'ready_report' => $new_count
         ]);
         return redirect()->back();
     }

     public function updateAdminSendFileTAriff($id){


         $update = UserTarif::where('id',$id)->update([
             'filestatus' => NULL
         ]);

         return redirect()->back();
     }

     public function closeAdminTariff($id){



         $product = UserTarif::where('id',$id)->update([
             'status' => 3,
             'finish_data' => Carbon::now()
         ]);

         $History = UserTarif::where('id', $id)->get();


         foreach ($History as $item) {
             $create  = HistoryTariff::create([
                 'id' =>  $item->id,
                 'user_id' => $item->user_id,
                 'tariff_id' => $item->tariff_id,
                 'file' => $item->file,
                 'filestatus' => $item->filestatus,
                 'status' => $item->status,
                 'ready_report' => $item->ready_report,
                 'expiration_at' => $item->expiration_at,
                 'finish_data' => $item->finish_data,
            ]);
         }

         if($create){
             $Histor = UserTarif::where('id', $id)->delete();
             return redirect()->route('activeTariff');
         }


     }
}
