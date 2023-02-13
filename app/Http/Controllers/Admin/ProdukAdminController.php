<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hardware;
use App\Models\Networking;
use App\Models\Portofolio;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukAdminController extends Controller
{
    public function produk_portofolio_index()
    {
        $portofolio = Portofolio::all();
        return view('landing.admin.produk-portofolio.index', compact('portofolio'));
    }

    public function produk_portofolio_create()
    {
        return view('landing.admin.produk-portofolio.create');
    }

    public function produk_portofolio_store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image')->store('portofolio', 'public');
        }

        Portofolio::create([
            'title' => $request->input('title'),
            'image' => $file
        ]);

        return redirect()->route('index_portofolio');
    }

    public function produk_portofolio_edit(Request $request, $id)
    {
        $edit = Portofolio::where('id', $id)->first();
        return view('landing.admin.produk-portofolio.update', compact('edit'));
    }

    public function produk_portofolio_update(Request $request, $id)
    {
        $update = Portofolio::where('id', $id)->first();
        if ($request->file('image')) {
            $file = $request->file('image')->store('portofolio', 'public');
            if ($update->image && file_exists(storage_path('app/public/' . $update->image))) {
                Storage::delete('public/' . $update->image);
                $file = $request->file('image')->store('portofolio', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $update->image;
        }

        $update->update([
            "title" => $request->input('title'),
            "image" => $file
        ]);

        return redirect()->route('index_portofolio');
    }

    public function produk_portofolio_destroy($id)
    {
        $delete = Portofolio::where('id', $id)->first();
        if ($delete->image && file_exists(storage_path('app/public/' . $delete->image))) {
            Storage::delete('public/' . $delete->image);
        }

        $delete->delete();

        return redirect()->route('index_portofolio');
    }

    public function produk_software_index()
    {
        $software = Software::all();
        return view('landing.admin.produk-software.index', compact('software'));
    }

    public function produk_software_create()
    {
        return view('landing.admin.produk-software.create');
    }

    public function produk_software_store(Request $request)
    {
        $this->validate($request, [
            "title" => 'required',
            "price" => 'required',
            "deskripsi" => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image')->store('software', 'public');
        }

        $slug = Str::slug($request->title);
        Software::create([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'slug' => $slug,
            'deskripsi' => $request->input('deskripsi'),
            'image' => $file
        ]);

        return redirect()->route('index_software');
    }

    public function produk_software_edit(Request $request, $id)
    {
        $edit = Software::where('id', $id)->first();
        return view('landing.admin.produk-software.update', compact('edit'));
    }

    public function produk_software_update(Request $request, $id)
    {
        $update = Software::where('id', $id)->first();
        if ($request->file('image')) {
            $file = $request->file('image')->store('software', 'public');
            if ($update->image && file_exists(storage_path('app/public/' . $update->image))) {
                Storage::delete('public/' . $update->image);
                $file = $request->file('image')->store('software', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $update->image;
        }

        $slug = Str::slug($request->title);
        $update->update([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'slug' => $slug,
            'deskripsi' => $request->input('deskripsi'),
            'image' => $file
        ]);

        return redirect()->route('index_software');
    }

    public function produk_software_destroy($id)
    {
        $delete = Software::where('id', $id)->first();
        if ($delete->image && file_exists(storage_path('app/public/' . $delete->image))) {
            Storage::delete('public/' . $delete->image);
        }

        $delete->delete();

        return redirect()->route('index_software');
    }

    public function produk_hardware_index()
    {
        $hardware = Hardware::all();
        return view('landing.admin.produk-hardware.index', compact('hardware'));
    }

    public function produk_hardware_create()
    {
        //
    }

    public function produk_hardware_store(Request $request)
    {
        //
    }

    public function produk_hardware_edit(Request $request, $id)
    {
        //
    }

    public function produk_hardware_update(Request $request, $id)
    {
        //
    }

    public function produk_hardware_destroy($id)
    {
        //
    }

    public function produk_networking_index()
    {
        $networking = Networking::all();
        return view('landing.admin.produk-networking.index', compact('networking'));
    }

    public function produk_networking_create()
    {
        //
    }

    public function produk_networking_store(Request $request)
    {
        //
    }

    public function produk_networking_edit(Request $request, $id)
    {
        //
    }

    public function produk_networking_update(Request $request, $id)
    {
        //
    }

    public function produk_networking_destroy($id)
    {
        //
    }
}
