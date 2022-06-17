<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
     public function allPartners(){
         $partner = Partner::all();

         return view('admin.PartnersContent.allPartners', compact('partner'));
     }

     public function newPartner(){
         return view('admin.PartnersContent.newPartner');
     }

     public function createNewPartner(PartnerRequest $request){
         $logo = $request->logo;

         $destinationPath = 'partner';
         $originalFile = time() . $logo->getClientOriginalName();
         $logo->move($destinationPath, $originalFile);
         $logo = $originalFile;

         $partner = Partner::create([
            'name' => $request->name,
            'url' => $request->url,
            'photo' => $logo
         ]);

         if($partner){
             return redirect()->route('allPartners')->with('succses', 'ok');
         }


     }

     public function deletePartner($id){

         $delete = Partner::where('id',$id)->delete();

         if($delete){
             return redirect()->back()->with('delete','delete');
         }
     }

     public function updatePartner($id){

         $partner = Partner::where('id',$id)->get();

         return view('admin.PartnersContent.updatePartner',compact('partner'));
     }

     public function createupdatePartner(PartnerUpdateRequest $request, $id){

         $logo = $request->logo;
           if($logo != NULL){

            $destinationPath = 'partner';
            $originalFile = time() . $logo->getClientOriginalName();
            $logo->move($destinationPath, $originalFile);
            $logo = $originalFile;

       $partner = Partner::where('id',$id)->update([
           'name' => $request->name,
           'url' => $request->url,
           'photo' => $logo
       ]);
       return redirect()->back()->with('succses', 'ok');
        }else{
       $partner = Partner::where('id',$id)->update([
           'name' => $request->name,
           'url' => $request->url
       ]);

               return redirect()->back()->with('succses','ok');
           }





     }
}
