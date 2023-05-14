<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Tur;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $turs = Tur::all();
        foreach ($turs as $tur){
            $tur->adress;
            $tur->image_url = $tur->image->url;
        }
        $adresses = Adress::all();
        return view('index')->with(compact('turs', 'adresses'));
    }
}
