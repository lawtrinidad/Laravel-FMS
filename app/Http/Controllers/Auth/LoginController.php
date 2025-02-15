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
        $allowedDomains = ['iskolarngbayan.pup.edu.ph', 'pup.edu.ph']; // List of allowed domains
    
        $request->validate([
            'email' => ['required', 'email', function ($attribute, $value, $fail) use ($allowedDomains) {
                $domain = substr(strrchr($value, "@"), 1); // Extract domain from email
                if (!in_array($domain, $allowedDomains)) {
                    $fail('Only PUP webmail addresses are allowed.');
                }
            }],
            'password' => 'required',
        ]);
    
        return $request->only('email', 'password');
    }
}