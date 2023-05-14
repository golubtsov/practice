<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserServices;
use Illuminate\View\View;

class UserController extends Controller
{
    public function posts($id): View
    {
        $infoAuthor = UserServices::posts($id);
        return view('author.index')->with(compact('infoAuthor'));
    }
}
