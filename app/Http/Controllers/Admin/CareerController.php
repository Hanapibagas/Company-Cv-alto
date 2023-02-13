<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, $id)
    {
        $update = Career::where('id', $id)->first();
        if ($request->file('banner')) {
            $file = $request->file('banner')->store('career', 'public');
            if ($update->banner && file_exists(storage_path('app/public/' . $update->banner))) {
                Storage::delete('public/' . $update->banner);
                $file = $request->file('banner')->store('career', 'public');
            }
        }

        if ($request->file('banner') === null) {
            $file = $update->banner;
        }

        $update->update([
            "banner" => $file
        ]);

        return redirect()->route('index_career');
    }

    public function destroy($id)
    {
        $delete = Career::where('id', $id)->first();
        if ($delete->banner && file_exists(storage_path('app/public/' . $delete->banner))) {
            Storage::delete('public/' . $delete->banner);
        }

        $delete->delete();

        return redirect()->route('index_career');
    }
}
