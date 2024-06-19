<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {   
        return view('pages.home');
    }

    public function myProjects()
    {
        return view('pages.projects');
    }


    public function about()
    {
        // return dd('projects');
        return view('pages.projects');

        // return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
