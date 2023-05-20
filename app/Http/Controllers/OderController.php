<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use Illuminate\Http\Request;

class OderController extends Controller
{
    public function create(Request $request)
    {
        if(auth()->check()){
            Oder::create([
                'tur_id' => $request->query('tur'),
                'user_id' => auth()->id()
            ]);
            return redirect('/')->with('message', 'Тур офрмлен, скоро с вами свяжется наш менеджер');
        }

        return redirect('/')->with('message', 'Войдите в личный кабинет, чтобы оформить тур');
    }
}
