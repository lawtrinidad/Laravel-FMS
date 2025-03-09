<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\ActivityLog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * Display User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
public function index()
{
    
    $user = auth()->user(); // Get the authenticated user
    $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
    
    $activities = ActivityLog::latest()->limit(20)->get();

    // Fetch folders and files created by the authenticated user
    $folders = \App\Folder::where('created_by_id', $user->id)->get();
    $files = \App\File::where('created_by_id', $user->id)->get();
    return view('home', compact('user','activities', 'folders', 'files'));
}
}
