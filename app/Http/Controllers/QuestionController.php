<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Request $request)
    {
        $res = Question::create([
            'client' => $request->all()['client'],
            'email' => $request->all()['email'],
            'text' => $request->all()['text'],
        ]);

        return redirect()->back()->with('message', 'Вопрос отправлен, скоро с вами свяжется наш менеджер');
    }
}

