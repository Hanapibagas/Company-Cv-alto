<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testi = Testimoni::all();
        return view('landing.admin.testimoni.index', compact('testi'));
    }

    public function create()
    {
        return view('landing.admin.testimoni.crete');
    }

    public function store(Request $request)
    {
        if ($request->file('video')) {
            $file = $request->file('video')->store('testimoni', 'public');
        }

        $test = Testimoni::create([
            'title' => $request->input('title'),
            'video' => $file
        ]);

        // return response()->json($test);

        return redirect()->route('index_testimoni');
    }
}
