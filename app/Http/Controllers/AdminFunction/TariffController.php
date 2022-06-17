<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Http\Requests\TariffRequest;
use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    public function allTariff(){
        $tariff = Tariff::orderBy('price')->get();
        return view('admin.TariffContnetn.AllTariff', compact('tariff'));
    }

    public function newTariff(){
        return view('admin.TariffContnetn.newTariff');
    }

    public function createNewTariff(TariffRequest $request){

        $data  = Tariff::create([
            'name' => $request->name,
            'price' => $request->price,
            'oneprice' => $request->oneprice,
            'estimates' => $request->estimates,
            'term' => $request->term
            ]);

        if($data){
            return redirect()->route('allTariff')->with('succses', 'Вы удачно добавили новый контент');
        }else{
            return redirect()->back()->with('error', 'error');
        }

    }

    public function deleteTariff($id){
        $tarif = Tariff::where('id',$id)->delete();
        if($tarif){
            return redirect()->back()->with('delete', 'delete');
        }
    }


    public function updateTariff($id){
        $tarif = Tariff::where('id',$id)->get();
        return view('admin.TariffContnetn.OneTariff', compact('tarif'));
    }

    public function createupdateTariff(TariffRequest $request, $id){

        $update = Tariff::where('id', $id)->update([
           'name' => $request->name,
           'price' => $request->price,
           'oneprice' => $request->oneprice ,
           'estimates' => $request->estimates,
           'term' => $request->term,
        ]);

        if($update){
            return redirect()->back()->with('succses', 'ok');
        }
    }


}
