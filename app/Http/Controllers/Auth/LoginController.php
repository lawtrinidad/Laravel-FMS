<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

  
    protected function credentials(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                if (!str_ends_with($value, '@iskolarngbayan.pup.edu.ph')) {
                    $fail('Only PUP webmail are allowed.');
                }
            }],
            'password' => 'required',
        ]);

        return $request->only('email', 'password');
    }
}
