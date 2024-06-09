<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Seshac\Otp\Otp;

class AuthController extends Controller
{
    function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if ($credentials["email"] == "demo") {
            abort_unless(app()->isLocal(), 403);
        }

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            if(auth()->user()->role == "admin"){
                return redirect()->intended('/admin/home');
            }

            return redirect()->intended('/user/home');
        }

        flash(__("auth.failed"))->error();

        return back()->withInput();
    }


    function demoLogin()
    {
        abort_unless(app()->isLocal(), 403);

        $user = User::where('email', 'demo')->first();
        if ($user) {
            Auth::login($user);
            return redirect()->intended('/admin/home');
        }

        $this->error("all.no_demo_user");

        return back();
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
