<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Models\HistoryTariff;
use App\Models\UserTarif;
use Illuminate\Http\Request;

class HistoriTariffController extends Controller
{
    public function historyAdminTariff(){
        $history = HistoryTariff::where('status',3)->OrderBy('id','DESC')->get();

         return view('admin.HistoryTariff.AllHistoryTariff', compact('history'));
    }
}
