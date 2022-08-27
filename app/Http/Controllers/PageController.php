<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function servicePage()
    {
       return view('service');
    }
    public function moviePage()
    {
       return view('movie');
    }

public function portfolioPage()
{
   return view('portfolio');
}

public function aboutPage()
{
   return view('about');
}




}

