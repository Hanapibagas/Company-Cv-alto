<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Event;
use App\Models\Hardware;
use App\Models\Networking;
use App\Models\Photos;
use App\Models\Portofolio;
use App\Models\Software;
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
        $banner = Career::all();
        return view('landing.pages.career', compact('banner'));
    }

    public function events()
    {
        $events = Event::all();
        return view('landing.pages.events', compact('events'));
    }

    public function events_details($slug)
    {
        $events = Event::where('slug', $slug)->firstOrFail();
        return view('landing.pages.details-events', compact('events'));
    }

    public function portofolio()
    {
        $portofolios = Portofolio::all();
        return view('landing.pages.produk-portofolio', compact('portofolios'));
    }

    public function software()
    {
        $softwares = Software::all();
        return view('landing.pages.produk-software', compact('softwares'));
    }

    public function software_details($slug)
    {
        $softwares = Software::where('slug', $slug)->firstOrFail();
        return view('landing.pages.details-software', compact('softwares'));
    }

    public function hardware()
    {
        $hardwares = Hardware::all();
        return view('landing.pages.protofolio-hardware', compact('hardwares'));
    }

    public function hardware_details($slug)
    {
        $hardwares = Hardware::where('slug', $slug)->firstOrFail();
        return view('landing.pages.details-hardware', compact('hardwares'));
    }

    public function networking()
    {
        $networkings = Networking::all();
        return view('landing.pages.produk-networking', compact('networkings'));
    }

    public function networking_details($slug)
    {
        $networkings = Networking::where('slug', $slug)->firstOrFail();
        return view('landing.pages.details-networking', compact('networkings'));
    }

    public function photos()
    {
        $photos = Photos::all();
        return view('landing.pages.galleri-photos', compact('photos'));
    }

    public function video()
    {
        return view('landing.pages.gallerry-video');
    }
}
