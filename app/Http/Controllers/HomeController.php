<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Event;
use App\Models\FormCareer;
use App\Models\Hardware;
use App\Models\Networking;
use App\Models\Photos;
use App\Models\Portofolio;
use App\Models\Software;
use App\Models\Testimoni;
use App\Models\Video;
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

    public function form()
    {
        return view('landing.pages.form-career');
    }

    public function store_form(Request $request)
    {
        if ($request->file('pas_foto')) {
            $pas_foto = $request->file('pas_foto')->store('form-career', 'public');
        }
        if ($request->file('ijaza')) {
            $ijaza = $request->file('ijaza')->store('form-career', 'public');
        }
        if ($request->file('ktp')) {
            $ktp = $request->file('ktp')->store('form-career', 'public');
        }
        if ($request->file('cv')) {
            $cv = $request->file('cv')->store('form-career', 'public');
        }

        FormCareer::create([
            'posisi' => $request->input('posisi'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'alamat' => $request->input('alamat'),
            'alamat_ktp' => $request->input('alamat_ktp'),
            'pendidikan' => $request->input('pendidikan'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'whatsapp' => $request->input('whatsapp'),
            'pas_foto' => $pas_foto,
            'ijaza' => $ijaza,
            'ktp' => $ktp,
            'cv' => $cv
        ]);

        // return response()->json($test);
        return redirect()->route('form_home')->with('status', 'Selamat data formulir anda berhasil di kirim');
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
        $videos = Video::all();
        return view('landing.pages.gallerry-video', compact('videos'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('landing.pages.blog', compact('blogs'));
    }

    public function detail_blog($slug)
    {
        $blogs = Blog::where('slug', $slug)->firstOrFail();
        return view('landing.pages.details-blog', compact('blogs'));
    }

    public function testimoni()
    {
        $testi = Testimoni::all();
        return view('landing.pages.testimoni', compact('testi'));
    }
}
