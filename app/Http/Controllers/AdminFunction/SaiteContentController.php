<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Models\Comand;
use App\Models\Drugoe;
use App\Models\InfoOnas;
use App\Models\kmandnayarabota;
use App\Models\primeriotchota;
use App\Models\SaitContent;
use App\Models\SistemaOcenki;
use App\Models\Tariff;
use App\Models\Tarifi;
use App\Models\ViberayutNas;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class SaiteContentController extends Controller
{

    public function glavniekran(){
        $content  = SaitContent::all();
        return view('admin.saitecontent.saitecontent', compact('content'));
    }


    public function updateglavniekran(Request $request){

        $allphoto = SaitContent::where('id',$request->id)->get();
        $logo = $request->logo;
        if($logo != null){
            $destinationPath = 'infoSaite';
            $originalFile = time() . $logo->getClientOriginalName();
            $logo->move($destinationPath, $originalFile);
            $logo = $originalFile;
        }else{
            $logo = $allphoto[0]->logo;
        }

        $create = SaitContent::where('id', $request->id)->update([
            'logo' => $logo,
            'onetext' => $request->onetext,
            'twotext' => $request->twotext
        ]);
        return redirect()->back()->with('sucsess', 'sucsess');
    }

    public function sistemaocenki(){
        $content  = SistemaOcenki::all();
        return view('admin.saitecontent.sistemaocenki', compact('content'));
    }

    public function updatesistemaocenki(Request $request){


        $photo = $request->photo;

        if($photo != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->move($destinationPath, $originalFile);
            $photo = $originalFile;

            $create = SistemaOcenki::where('id' , $request->id)->update([
                'photo' => $photo,
                'text1' => $request->text1,
                'text2' => $request->text2,
                'text3' => $request->text3,
                'text4' => $request->text4,
                'text5' => $request->text5,
                'text6' => $request->text6,
                'text7' => $request->text7,
                'text8' => $request->text8,
                'text9' => $request->text9,
                'text10' => $request->text10,
                'text11' => $request->text11,
                'text12' => $request->text12,
                'text13' => $request->text13,
                'text14' => $request->text14,
                'text15' => $request->text15,
            ]);
        }else{

            $create = SistemaOcenki::where('id' , $request->id)->update([

                'text1' => $request->text1,
                'text2' => $request->text2,
                'text3' => $request->text3,
                'text4' => $request->text4,
                'text5' => $request->text5,
                'text6' => $request->text6,
                'text7' => $request->text7,
                'text8' => $request->text8,
                'text9' => $request->text9,
                'text10' => $request->text10,
                'text11' => $request->text11,
                'text12' => $request->text12,
                'text13' => $request->text13,
                'text14' => $request->text14,
                'text15' => $request->text15,
            ]);
        }


        return redirect()->back()->with('succses', 'succeses');
    }


    public function partnyorskayaprograma(){
        $content  = Comand::all();
        return view('admin.saitecontent.partnyorskayaprograma',  compact('content'));
    }


    public function comanda(){
        $content  = Comand::all();
       return view('admin.saitecontent.comanda',  compact('content'));
    }

    public function updatecomanda(Request $request){


        $allphoto = Comand::where('id',$request->id)->get();

        $logo = $request->logo;

        if($logo != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $logo->getClientOriginalName();
            $logo->move($destinationPath, $originalFile);
            $logo = $originalFile;
        }else{
            $logo = $allphoto[0]->logo;
        }


    $create = Comand::where('id', $request->id)->update([
        'logo' =>  $logo,
        'text1' => $request->text1,
        'text2' => $request->text2,
        'text3' => $request->text3
    ]);
        return redirect()->back()->with('succses', 'succeses');
    }

    public function viberayutnas(){
        $content  = ViberayutNas::all();
        return view('admin.saitecontent.viberayutnas',  compact('content'));
    }

    public function updateviberayutnas(Request $request){

    $create = ViberayutNas::where('id', $request->id)->update([
        'text1' => $request->text1,
        'text2' => $request->text2,
        'text3' => $request->text3,
        'text4' => $request->text4,
        'text5' => $request->text5,
        'text6' => $request->text6,
        'text7' => $request->text7,
        'text8' => $request->text8,
        'text9' => $request->text9,
    ]);

        return redirect()->back()->with('succses', 'succeses');
    }

    public function tarifi(){
        $content  = Tarifi::all();
        return view('admin.saitecontent.tarifi',  compact('content'));
    }

    public function updatetarifi(Request $request){

        $create = Tarifi::where('id', $request->id)->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
        ]);
        return redirect()->back()->with('succses', 'succeses');
    }

    public function komandnayarabota(){

        $content = kmandnayarabota::all();
        return view('admin.saitecontent.ComandnayaRabota',  compact('content'));
    }

    public function updatekomandnayarabota(Request $request){
        $create = kmandnayarabota::where('id', $request->id)->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
        ]);
        return redirect()->back()->with('succses', 'succeses');
    }

    public function primeriotchota(){
        $content = primeriotchota::all();
        return view('admin.saitecontent.primeriotchota',  compact('content'));
    }

    public function updateprimeriotchota(Request $request){


        $allphoto = primeriotchota::where('id', $request->id)->get();



        $photo1 = $request->photo1;
        $photo2 = $request->photo2;
        $photo3 = $request->photo3;
        $photo4 = $request->photo4;
        $photo5 = $request->photo5;

        if($photo1 != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo1->getClientOriginalName();
            $photo1->move($destinationPath, $originalFile);
            $photo1 = $originalFile;
        }else{
            $photo1 = $allphoto[0]->photo1;
        }

        if($photo2 != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo2->getClientOriginalName();
            $photo2->move($destinationPath, $originalFile);
            $photo2 = $originalFile;
        }else{
            $photo2 = $allphoto[0]->photo2;
        }
        if($photo3 != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo3->getClientOriginalName();
            $photo3->move($destinationPath, $originalFile);
            $photo3 = $originalFile;
        }else{
            $photo3 = $allphoto[0]->photo3;
        }
        if($photo4 != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo4->getClientOriginalName();
            $photo4->move($destinationPath, $originalFile);
            $photo4 = $originalFile;
        }else{
            $photo4 = $allphoto[0]->photo4;
        }

        if($photo5 != null){
            $destinationPath = 'sistemaocenki';
            $originalFile = time() . $photo5->getClientOriginalName();
            $photo5->move($destinationPath, $originalFile);
            $photo5 = $originalFile;
        }else{
            $photo5 = $allphoto[0]->photo5;
        }
        $create = primeriotchota::where('id', $request->id)->update([
            'photo1' => $photo1,
            'photo2' => $photo2,
            'photo3' => $photo3,
            'photo4' => $photo4,
            'photo5' => $photo5,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
            'text5' => $request->text5,
            'text6' => $request->text6,
            'text7' => $request->text7,
            'text8' => $request->text8,
            'text9' => $request->text9,
        ]);
        return redirect()->back()->with('succses', 'succeses');
    }

    public function drugoe(){
        $content = Drugoe::all();
        return view('admin.saitecontent.drugoe',  compact('content'));
    }

    public function updatedrugoe(Request $request){

        $create = Drugoe::where('id', $request->id)->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
            'text5' => $request->text5,
        ]);
        return redirect()->back()->with('succses', 'succeses');
    }

    public function infoonas(){
        $content = InfoOnas::all();
        return view('admin.saitecontent.infoonas',  compact('content'));
    }

    public function updateinfoonas(Request $request){


        $allphoto = InfoOnas::all();
        $logo = $request->logo;
        if($logo != null){
            $destinationPath = 'infoSaite';
            $originalFile = time() . $logo->getClientOriginalName();
            $logo->move($destinationPath, $originalFile);
            $logo = $originalFile;
        }else{
            $logo = $allphoto[0]->logo;
        }
        $create = InfoOnas::where('id', $request->id)->update([
            'logo' => $logo,
            'info' => $request->info,
            'email' => $request->email,
            'phone' => $request->phone,
            'vkontakte' => $request->vkontakte,
            'telegram' => $request->telegram,
            'god' => $request->god
        ]);

        return redirect()->back()->with('succses', 'succeses');

    }


}
