<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Tariff()
    {
        return $this->hasMany(UserTarif::class,'tariff_id');
    }


    public function HistoryTariff()
    {
        return $this->hasMany(HistoryTariff::class,'tariff_id');
    }
}
