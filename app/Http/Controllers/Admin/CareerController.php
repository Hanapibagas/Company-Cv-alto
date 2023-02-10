<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $banner = Career::all();
        return view('landing.admin.career.index', compact('banner'));
    }

    public function create()
    {
        return view('landing.admin.career.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required'
        ]);

        if ($request->file('banner')) {
            $file = $request->file('banner')->store('career', 'public');
        }

        Career::create([
            "banner" => $file
        ]);

        return redirect()->route('index_career');
    }

    public function edit(Request $request, $id)
    {
        $banner = Career::where('id', $id)->first();
        return view('landing.admin.career.update', compact('banner'));
    }
}
