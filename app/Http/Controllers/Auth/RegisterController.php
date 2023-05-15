<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): RedirectResponse | View
    {
        if(auth()->user()){
            return back();
        }
        return view('register');
    }

    public function register(Request $request): View
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8' , 'string', 'confirmed']
        ]);

        $user = User::create([
           'fname' => $request->fname,
           'lname' => $request->lname,
           'email' => $request->email,
           'password' => Hash::make($request->password),
           'token' => Str::random(40),
           'status' => UserStatus::User
        ]);

        Auth::login($user);
        $user->posts = $user->posts();

        return view('dashboard')->with(compact('user'));
    }
}
