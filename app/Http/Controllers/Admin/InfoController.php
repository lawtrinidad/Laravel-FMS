<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Show the About page.
     */
    public function about()
    {
        return view('admin.about');
    }

    /**
     * Show the User Manual page.
     */
    public function userManual()
    {
        return view('admin.user-manual');
    }
}
