<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Show the About page.
     */
    public function about()
    {
        $creators = [
            ['name' => 'John Lawrence Trinidad', 'role' => 'Project Head'],
            ['name' => 'Acel Gabrielle Margallo', 'role' => 'Lead Developer'],
            ['name' => 'Vanica Lobusta', 'role' => 'Sobrang latina'],
        ];

        return view('admin.about', compact('creators'));
    }
}
