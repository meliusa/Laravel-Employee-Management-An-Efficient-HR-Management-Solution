<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'      =>  ['required', 'string', 'min:8'],
            'password'      =>  ['required', 'string', 'min:8']
        ]);

        if (Auth::attempt([
            'username'  =>  $request->get('username'),
            'password'  =>  $request->get('password')
        ])) {

            $request->session()->regenerate();

            return response()->json([
                'status'    =>  true,
                'id_role'   =>  Auth::user()->id_role
            ]);
        }

        return response()->json(['status' => false]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.index');
    }

    public function forgot_password()
    {
        return view('auth.forgot_password');
    }
}
