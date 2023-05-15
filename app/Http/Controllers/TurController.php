<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Tur;
use Illuminate\Http\Request;

class TurController extends Controller
{
    public function index()
    {
        $turs = Tur::all();
        foreach ($turs as $tur){
            $tur->adress;
            $tur->image_url = $tur->image->url;
        }
        $adresses = Adress::all();
        return view('turs')->with(compact('turs', 'adresses'));
    }

    public function tur($id)
    {
        $tur = Tur::where('id', '=', $id)->first();
        $tur->adress;
        $tur->image_url = $tur->image->url;
        return view('tur')->with(compact('tur'));
    }
}
