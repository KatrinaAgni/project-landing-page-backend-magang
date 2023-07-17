<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/login'); /*home*/
        }
        else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('tb_rpl/tampil');//home, welcome
        }else{
            // Session::flash('error', 'Email atau Password Salah');
            return redirect('/tb_rpl/tampil');//welcome
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
?>