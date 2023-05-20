<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\Tur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $oders = Oder::where('user_id', '=', auth()->id())->get();
        if (count($oders) == 0)
            return view('dashboard')->with(compact('oders'));
        foreach ($oders as $oder){
            $oder->tur = Tur::where('id', '=', $oder->tur_id)->first();
        }
        return view('dashboard')->with(compact('oders'));
    }
}
