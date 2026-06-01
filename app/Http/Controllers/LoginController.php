<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $code = $request->code;

        if ($email == 'admin@gmail.com' && $code == '1234') {

            session(['logged_in' => true]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email ou code incorrect');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/');
    }
}
