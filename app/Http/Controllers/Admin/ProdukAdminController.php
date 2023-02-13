<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hardware;
use App\Models\Networking;
use App\Models\Portofolio;
use App\Models\Software;
use Illuminate\Http\Request;

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











    public function produk_software_index()
    {
        $software = Software::all();
        return view('landing.admin.produk-software.index', compact('software'));
    }

    public function produk_hardware_index()
    {
        $hardware = Hardware::all();
        return view('landing.admin.produk-hardware.index', compact('hardware'));
    }

    public function produk_networking_index()
    {
        $networking = Networking::all();
        return view('landing.admin.produk-networking.index', compact('networking'));
    }
}
