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
            ['name' => 'John Lawrence Trinidad', 'role' => 'Project Manager/Full-Stack Developer', 'img_src' => 'images/law.jpg' ],
            ['name' => 'Acel Gabrielle Margallo', 'role' => 'Full-Stack Lead Developer', 'img_src' => 'images/Ace.jpg'],
            ['name' => 'Vanica Lobusta', 'role' => 'Full-Stack Developer/UI/UX Designer', 'img_src' => 'images/vanica.jpg'],
            ['name' => 'Trisha Camille Galicia', 'role' => 'Full-Stack Developer', 'img_src' => 'images/trisha.png'],
            ['name' => 'Jermaine Jade De Guzman', 'role' => 'UI/UX Designer/Full-Stack Developer', 'img_src' => 'images/jeydi.jpg'],
            ['name' => 'Miguel Alfonso Neri', 'role' => 'Logic Engineer/Developer', 'img_src' => 'images/migs.jpg'],
            ['name' => 'Juan Miguel Gamo', 'role' => 'Logic Engineer', 'img_src' => 'images\juanny.jpg'],
            ['name' => 'Jiro Ivan Ybanez', 'role' => 'Logic Engineer/Certified latina', 'img_src' => 'images/jiro.jpg']
        ];

        return view('admin.about', compact('creators'));
    }
}
