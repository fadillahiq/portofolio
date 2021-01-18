<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('animol.login');
    }

    public function loginPost(Request $request)
    {
        // dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
                session(['login_successfull' => true]);
                return redirect('dashboard');
            }
        }

        return redirect('/login')->with('message', 'Email atau Password salah!');

    }
}
