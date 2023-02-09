<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing.pages.home');
    }

    public function about()
    {
        return view('landing.pages.about');
    }

    public function investor()
    {
        return view('landing.pages.investor');
    }

    public function career()
    {
        return view('landing.pages.career');
    }

    public function events()
    {
        return view('landing.pages.events');
    }

    public function portofolio()
    {
        return view('landing.pages.produk-portofolio');
    }

    public function software()
    {
        return view('landing.pages.produk-software');
    }

    public function hardware()
    {
        return view('landing.pages.protofolio-hardware');
    }

    public function networking()
    {
        return view('landing.pages.produk-networking');
    }

    public function photos()
    {
        return view('landing.pages.galleri-photos');
    }

    public function video()
    {
        return view('landing.pages.gallerry-video');
    }
}
