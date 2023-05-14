<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): RedirectResponse | View
    {
        if(auth()->user()){
            return back();
        }
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse | View
    {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'min:8', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = auth()->user();
            $user->posts = $user->posts();
            return view('dashboard.index')->with(compact('user'));
        }
        return back()->withInput();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
