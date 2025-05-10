<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //top navigation pages

    public function whoWeAre(): View
    {
        return view('tsuadllc.pages.top-navigation.who-we-are');
    }

    public function companies(): View
    {
        return view('tsuadllc.pages.top-navigation.companies');
    }

    public function services(): View
    {
        return view('tsuadllc.pages.top-navigation.services');
    }

    public function contactUs(): View
    {
        return view('tsuadllc.pages.top-navigation.contact-us');
    }
}
